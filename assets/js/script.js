document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.form__input').forEach((input) => {
        const label = input.closest('.form__label');
        const labelText = input.previousElementSibling;

        if (labelText) {
            input.addEventListener('focus', () => {
                label.classList.add('active');
                labelText.classList.add('active');
            });

            input.addEventListener('blur', () => {
                if (!input.value) {
                    label.classList.remove('active');
                    labelText.classList.remove('active');
                }
            });

            if (input.tagName === 'SELECT') {
                input.addEventListener('change', () => {
                    if (input.value) {
                        label.classList.add('active');
                        labelText.classList.add('active');
                    } else {
                        label.classList.remove('active');
                        labelText.classList.remove('active');
                    }
                });
            }

            if (input.value) {
                label.classList.add('active');
                labelText.classList.add('active');
            }
        }
    });
});
