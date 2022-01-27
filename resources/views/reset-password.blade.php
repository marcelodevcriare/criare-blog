@extends('voyager::auth.master')

@section('content')
    <div class="login-container">

        <p>Esqueceu a senha:</p>

        <form method="POST" id="resetPassword">
            {{ csrf_field() }}
            <p>Por favor nos informe seu email:</p>

            <div class="form-group form-group-default" id="emailGroup">
                <label>{{ __('voyager::generic.email') }}</label>
                <div class="controls">
                    <input type="text" name="email" id="email" placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn btn-block login-button">
                <span class="signin">Alterar senha</span>
            </button>

        </form>

        <a href="/admin/login">
            <button class="btn btn-block login-button" id="voltar" style="margin-left: 20px; display: none">
                <span class="">Voltar a tela de login</span>
            </button>
        </a>
        <div style="clear:both"></div>
        <br>
        <div class="infos alert" style="display: none"></div>
        <div style="clear:both"></div>

    </div> <!-- .login-container -->
@endsection

@section('post_js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $( "#resetPassword" ).on( "submit", function( event ) {
            event.preventDefault();
            var form = $(this).serialize();

            $('.infos')
                .removeClass('alert-danger')
                .removeClass('alert-success')
                .hide();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `{{route('resetPassword')}}`,
                type: 'POST',
                data: form,
                beforeSend: function () {
                    $('.signin').html('<span class="voyager-refresh"></span> Alterando Senha...</span>')
                },
                statusCode: {
                    204: function (response){
                        $('.infos')
                            .html('<span> Email não cadastrado, por favor verifique as informações!</span>')
                            .addClass('alert-danger')
                            .show()

                        $('.signin').html('<span class="signin"> Alterar senha </span>')
                    },
                    200: function (response){
                        $('.infos')
                            .html('<span> Senha alterada com sucesso! Enviado ao email informado </span>')
                            .addClass('alert-success')
                            .show();

                        $('#voltar').show();

                        $('.signin').html('<span class="signin"> Alterar senha </span>')

                    }
                }

            })
        })
    </script>
@endsection
