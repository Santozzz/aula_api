<?php
    class Response {
        public static function resp($status = 200,$message = 'Deu certo pai!!',$data = null,){
            // Aqui vai o corpo da resposta
            header('Content-Type: application/json');
            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'dados' => $data,
            ]);
        }
    }
?>