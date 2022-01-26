<?php

    class Clientes_model extends CI_Model
    {
        function __construct(){
            $this->load->database();
        }

        public function listarClientes() {
            // $clientes = $this->db->get('marcelo_result_final.exames');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://api.tomticket.com/clientes/0cb628d8731a12b46ddb300ee3f2ddab/1");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $result = curl_exec($ch);
            curl_close($ch);

            $array= json_decode($result, true);

            return $array;
        }

        // Func para cadastrar clientes
        public function cadastrarCliente($dados) {

            $ch = curl_init();
            // - adiciona os campos do body/post
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dados); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // - Desabilita print automático
            curl_setopt($ch, CURLOPT_URL, "https://api.tomticket.com/criar_cliente/0cb628d8731a12b46ddb300ee3f2ddab"); // Adiciona URL do post
      
            $result = curl_exec($ch); // Executa request
      
            curl_close($ch); // Encerra client

            // Pegando IP 
            try {
                $arr = [
                    "ip_and" => $_SERVER['REMOTE_ADDR'] // Isso só epga quanto hospedado se não me engano, usei isso faz muito tmepo.
                ];
                // !MANEIRA MAIS EFICIENTE DE PEGAR IP DE USUÁRIOS - pelo que vi no stackoverflow
                // function get_client_ip() {
                //     $ipaddress = '';
                //     if (isset($_SERVER['HTTP_CLIENT_IP']))
                //         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
                //     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                //         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
                //     else if(isset($_SERVER['HTTP_X_FORWARDED']))
                //         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
                //     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                //         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
                //     else if(isset($_SERVER['HTTP_FORWARDED']))
                //         $ipaddress = $_SERVER['HTTP_FORWARDED'];
                //     else if(isset($_SERVER['REMOTE_ADDR']))
                //         $ipaddress = $_SERVER['REMOTE_ADDR'];
                //     else
                //         $ipaddress = 'UNKNOWN';
                //     return $ipaddress;
                // }
                
                $clientes = $this->db->insert('public.created', $arr); // Armazenando ip, data é automático do postgres com timezone
            } catch (\Throwable $th) {
               print_r("erro ao guardar dados do usuário");
            }
           
            return json_decode($result, true);
             
        }
        
    }
    

?>