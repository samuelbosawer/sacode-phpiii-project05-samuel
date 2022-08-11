<?php 
    require __DIR__ .'/include/header.php';
    $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    if($request_method === 'GET')
    {
        require __DIR__ .'/include/form.php';
    }elseif($request_method === 'POST')
    {
        require __DIR__ .'/include/process.php';
    }

    require __DIR__ .'/include/footer.php';
?>
          
