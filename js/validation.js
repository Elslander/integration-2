{
    const handleSubmitForm = e => {
        const $form = e.currentTarget;

        // Block submission if invalid
        if (!$form.checkValidity()) {
            e.preventDefault();
            const inputs = document.querySelectorAll(`.input`);
            inputs.forEach($input => showValidationInfo($input));
        }

        // === RADIO BUTTON GROUP VALIDATION (experience) ===
        const experienceRadios = document.querySelectorAll(`input[name="experience"]`);
        const experienceError = document.querySelector(`#experience-error`);

        const isExperienceSelected = [...experienceRadios].some(radio => radio.checked);
        if (!isExperienceSelected) {
            e.preventDefault(); // prevent form submission
            experienceError.textContent = `Please select your climbing experience level`;
        } else {
            experienceError.textContent = ``;
        }
    };

    const handleInputField = e => {
        const $input = e.currentTarget;
        const $error = $input.parentElement.querySelector(`.error`);
        if ($input.checkValidity()) {
            $error.textContent = ``;
        }
    };

    const showTypeMismatch = type => {
        switch (type) {
            case `email`:
                return `e-mailadres`;
            case `url`:
                return `website url`;
            case `tel`:
                return `telephone nr`;
        }
    };

    const showValidationInfo = $input => {
        const $error = $input.parentElement.querySelector(`.error`);

        if ($input.validity.valueMissing) {
            $error.textContent = `This field is mandatory`;
        } else if ($input.validity.typeMismatch) {
            $error.textContent = `We're expecting a valid ${showTypeMismatch($input.getAttribute(`type`))}`;
        } else if ($input.validity.tooLong) {
            $error.textContent = `Please enter no more than ${$input.getAttribute(`maxlength`)} characters`;
        } else if ($input.validity.tooShort) {
            $error.textContent = `Please enter at least ${$input.getAttribute(`minlength`)} characters`;
        } else if ($input.validity.rangeUnderflow) {
            $error.textContent = `The value needs to be at least ${$input.getAttribute(`min`)}`;
        } else if ($input.validity.rangeOverflow) {
            $error.textContent = `The value needs to be less than ${$input.getAttribute(`max`)}`;
        }
    };

    const handleBlurInput = e => {
        showValidationInfo(e.currentTarget);
    };

    const handleRadioChange = e => {
        const experienceRadios = document.querySelectorAll(`input[name="experience"]`);
        const experienceError = document.querySelector(`#experience-error`);

        const isExperienceSelected = [...experienceRadios].some(radio => radio.checked);
        if (isExperienceSelected) {
            experienceError.textContent = ``;
        }
    };

    const init = () => {
        const $form = document.querySelector(`form`);
        $form.noValidate = true;
        $form?.addEventListener(`submit`, handleSubmitForm);

        const inputs = document.querySelectorAll(`.input`);
        inputs.forEach($input => {
            $input?.addEventListener(`blur`, handleBlurInput);
            $input?.addEventListener(`input`, handleInputField);
        });

        const experienceRadios = document.querySelectorAll(`input[name="experience"]`);
        experienceRadios.forEach(radio => {
            radio?.addEventListener(`change`, handleRadioChange);
        });
    };

    init();
}
  