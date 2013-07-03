<?php
   // log
   $trace = $e->getTrace();
   $message = $e->getMessage();
   $message .= "\n" . print_r($trace[2]['args'], true);
