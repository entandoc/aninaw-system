<?php

    function indicateStatus($status) {
        
        switch ($status) {
            case 'Pending':
                echo 'status-pending';
                break;
            case 'Cancelled':
                echo 'status-cancelled';
                break;
            case 'On Going':
                echo 'status-on-going';
                break;
            case 'Completed':
                echo 'status-completed';
                break;
        }
    }