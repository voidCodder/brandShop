/**
 * Nouislider
 * 
 */
$(function () {
    if (document.getElementById('slider')) {

        var slider = document.getElementById('slider');
        noUiSlider.create(slider, {
            start: [0, 1000],
            connect: true,
            step: 10,
            range: {
                'min': [0],
                'max': [1000]
            },

        });

        var inputs = [
            document.getElementById('input-low'),
            document.getElementById('input-up')
        ];

        //При изменение обновлять textbox
        slider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

        //При изменение textbox обновлять слайдер
        inputs.forEach(function (input, handle) {
            input.addEventListener('change', function () {
                slider.noUiSlider.setHandle(handle, this.value);
            });
        });

    }

});
    
