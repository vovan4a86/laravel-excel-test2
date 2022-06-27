<div class="container">
    <div class="py-2 d-flex justify-content-around align-items-center">
        <div class="text-white">
            Footer Logo
        </div>
        <div class="text-info">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
        <div class="text-white">
            Copyright 2022
        </div>
    </div>
</div>

@if( Route::currentRouteName() === 'create' )
    <script>
        const form = document.querySelector('form')
        const name = document.querySelector('#name')
        const sendBtn = document.querySelector('#send-btn')
        const error = document.querySelector('.error')

        sendBtn.addEventListener('click', e => {
            e.preventDefault();
            if (name.value.length === 0) {
                error.innerHTML = 'Введите имя';
                name.style.border = '1px solid red';
            } else {
                const data = new FormData(form);
                axios.post('/rows', data)
                    .then(response => {
                        if (response.status === 201) {
                            name.value = '';
                        }
                    })
                    .catch(err => {
                        error.innerHTML = 'Ошибка валидации на сервере!';
                        console.log('Server validation error! ', err)
                    })
            }
        })

        name.addEventListener('click', () => {
            error.innerHTML = '';
            name.style.border = '1px solid #ced4da';
        })

    </script>
@endif
