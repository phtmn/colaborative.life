<?php

namespace App\Notifications;


use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class MyResetPasswordNotification extends ResetPassword
{

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Recuperação de Senha')
            ->greeting('Olá Usuário(a)')
            ->line('Você recebeu esse e-mail por que nós recebemos uma pedido de recuperação de senha.')
            ->action('Recuperar senha', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Se você não requisitou essa ação, nenhuma ação é obrigatória')
            ->salutation('Equipe CoopViva');
    }

}
