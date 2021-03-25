'use strict';

const contactForm = document.querySelector('.contact-form');
const buttonClose = contactForm.querySelector('.contact-form__close');
const inputsForm = contactForm.querySelectorAll('.contact-form__input');
const labelsForm = contactForm.querySelectorAll('.contact-form__label');
const selectButton = contactForm.querySelector('.contact-form__select-button');
const selectOptions = contactForm.querySelector('.contact-form__select-options');
const textareaField = contactForm.querySelector('.contact-form__field--textarea');
const inputName = contactForm.querySelector('input[name="name"]');
const inputEmail = contactForm.querySelector('input[name="email"]');
const selectTheme = contactForm.querySelector('.contact-form__field--underlined');
const selectLabels = contactForm.querySelectorAll('.contact-form__select-label');
const selectInputs = contactForm.querySelectorAll('.contact-form__select-input');


const popupForm = document.querySelector('.form-popup');
const popupFormClose = popupForm.querySelector('.form-popup__close');
const popupFormButton = popupForm.querySelector('.form-popup__button');


const defaultSelectContent = selectButton.textContent;


contactForm.addEventListener('input', () => {
  for (let i = 0; i < inputsForm.length; i++) {
    if (inputsForm[i].value.length > 0) {
      labelsForm[i].style.visibility = 'visible';
    } else {
      labelsForm[i].style.visibility = 'hidden';
    }

    if (inputsForm[i].classList.contains('contact-form__input--error')) {
      if (inputsForm[i].value.length > 0) {
        inputsForm[i].classList.remove('contact-form__input--error');
      }
    }
  };
});


buttonClose.addEventListener('click', () => {
  contactForm.style.display = 'none';
})


selectButton.addEventListener('click', () => {
  selectOptions.classList.toggle('contact-form__select-options--show');
  textareaField.classList.toggle('contact-form__field--textarea--hide');
});


selectTheme.addEventListener('change', () => {
  for (let i = 0; i < selectInputs.length; i++) {
    if (selectInputs[i].checked) {
      selectButton.textContent = selectLabels[i].textContent;
    }
  };

  selectButton.style.opacity = '1';
  selectOptions.classList.remove('contact-form__select-options--show');
  textareaField.classList.remove('contact-form__field--textarea--hide');

  if (selectTheme.classList.contains('contact-form__field--error')) {
    selectTheme.classList.remove('contact-form__field--error')
  }
});


const sendData = (body) => {
  return fetch(
    'office@jscorp.ru',
    {
      method: 'POST',
      body,
    },
  )
};


const showPopup = () => {
  popupForm.style.display = 'block';
  contactForm.style.display = 'none';

  const removePopupEventListener = () => {
    popupFormClose.removeEventListener('click', onPopupElementClick);
    popupFormButton.removeEventListener('click', onPopupElementClick);
  }

  const onPopupElementClick = () => {
    popupForm.style.display = 'none';

    removePopupEventListener();
  };


  popupFormClose.addEventListener('click', onPopupElementClick);
  popupFormButton.addEventListener('click', onPopupElementClick)
}


const setAdFormSubmit = (onSuccess) => {
  contactForm.addEventListener('submit', (evt) => {
    evt.preventDefault();

    if (!inputName.value) {
      inputName.classList.add('contact-form__input--error');
    } else {
      inputName.classList.remove('contact-form__input--error');
    }

    if (!inputEmail.value) {
      inputEmail.classList.add('contact-form__input--error');
    } else {
      inputEmail.classList.remove('contact-form__input--error');
    }

    if (selectButton.textContent === defaultSelectContent) {
      selectTheme.classList.add('contact-form__field--error');
    } else {
      selectTheme.classList.remove('contact-form__field--error');
    }

    if (inputName.value && inputEmail.value && selectButton.textContent !== defaultSelectContent) {
      sendData(new FormData(evt.target))
        .then(() => {
          onSuccess()
        })
    }
  })
};

setAdFormSubmit(showPopup);



