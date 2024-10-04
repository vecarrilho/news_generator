<?php
    if (!function_exists('verify_status')) {
        function verify_status($status) {
            $data = 'active';

            if(empty($status)){
                $data = 'inactive';
            }

            return $data;
        }
    }