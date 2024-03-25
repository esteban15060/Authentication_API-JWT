<?php

class Queries {

    public function queryLogin() {
        $query = "SELECT id_user, nomb_user, apell_user, email_user, passw_user 
                    FROM users WHERE email_user = :email_user LIMIT 0,1";

        return $query;
    }

    public function queryRegisterUser() {
        $query = "INSERT INTO users
                    SET nomb_user = :nomb_user,
                        apell_user = :apell_user,
                        nick_user = :nick_user,
                        email_user = :email_user,
                        passw_user = :passw_user";
        
        return $query;
    }
}

?>