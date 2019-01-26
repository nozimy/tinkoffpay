<?php
/**
 * File index.php. Demo for using TinkoffMerchantAPI library.
 *
 * PHP version 5.3
 *
 * @category Tinkoff
 * @package  Tinkoff
 * @author   Shuyskiy Sergey <s.shuyskiy@tinkoff.ru>
 * @license  http://opensource.org/licenses/MIT MIT license
 * @link     http://tinkoff.ru
 */
function __autoload($className)
{
    include $className.'.php';
}
//spl_autoload('TinkoffMerchantAPI');
$api = new TinkoffMerchantAPI(
    'Test',
    'password',
    'https://securepay.tinkoff.ru/rest/'
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css"/>
    <title>Testing Merchant API</title>
</head>
<body>
<h1 align="center">Тестирование MerchantAPI</h1>

<?php if (true) : ?>
    <div class="card">
        <h2>Метод Init:</h2>

        <div class="article">
            <?php
            $params = array(
                'OrderId' => '669',
                'Amount' => '1000',
//                'Description' => 'Любовь',
                'DATA' => 'Email=test',
                //'Recurrent' => 'Y',
//                'CustomerKey' => '5',
                //'Token' => '1',
            );
            $api->init($params);
            echo 'Params:';
//                Debug::trace($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>

            <?php if ($api->error) : ?>
                <span class="error"><?php echo $api->error ?></span>
            <?php else: ?>
                <p><span class="highlight">Status</span>: <?php echo $api->status ?></p>
                <p>
                    <span class="highlight">PaymentUrl</span>:
                    <a href="<?php echo $api->paymentUrl ?>" target="_blank"><?php echo $api->paymentUrl ?></a>
                </p>
                <p><span class="highlight">PaymentId</span>: <?php echo $api->paymentId ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод GetState:</h2>

        <div class="article">
            <?php
            $params = array(
                'PaymentId' => '147161',
            );
            $api->getState($params);
            ?>
            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">Status</span>: <?php echo $api->status ?></p>
                <p><span class="highlight">PaymentId</span>: <?php echo $api->paymentId ?></p>
                <p><span class="highlight">OrderId</span>: <?php echo $api->orderId ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод Confirm:</h2>

        <div class="article">
            <?php
            $params = array(
                'PaymentId' => '147161',
            );
            $api->confirm($params);
            //    echo 'Params:';
            //    Debug::trace($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>

            <?php if ($api->error) : ?>
                <span class="error"><?php echo $api->error ?></span>
            <?php else: ?>
                <p><span class="highlight">Status</span>: <?php echo $api->status ?></p>
                <p><span class="highlight">PaymentId</span>: <?php echo $api->paymentId ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод Resend</h2>

        <div class="article">

            <p><span class="highlight">Response</span>: <?php echo $api->resend() ?></p>

            <p><span class="highlight">Count</span>: <?php echo $api->Count ?></p>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод AddCustomer</h2>

        <div class="article">
            <?php
            $params = array(
                'CustomerKey' => '4',
            );
            $api->addCustomer($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">CustomerKey</span>: <?php echo $api->customerKey ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод GetCustomer</h2>

        <div class="article">
            <?php
            $params = array(
                'CustomerKey' => '4',
            );
            $api->getCustomer($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">CustomerKey</span>: <?php echo $api->customerKey ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (false) : ?>
    <div class="card">
        <h2>Метод RemoveCustomer</h2>

        <div class="article">
            <?php
            $params = array(
                'CustomerKey' => '4',
            );
            $api->removeCustomer($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">CustomerKey</span>: <?php echo $api->customerKey ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (true) : ?>
    <div class="card">
        <h2>Метод GetCardList</h2>

        <div class="article">
            <?php
            $params = array(
                'CustomerKey' => '5',
            );
            $api->getCardList($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">CustomerKey</span>: <?php echo $api->customerKey ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php if (true) : ?>
    <div class="card">
        <h2>Метод RemoveCard</h2>

        <div class="article">
            <?php
            $params = array(
                'CardId' => '10804',
                'CustomerKey' => '5',
            );
            $api->removeCard($params);
            ?>

            <p><span class="highlight">Response</span>: <?php echo $api->response ?></p>
            <?php if ($api->error) : ?>
                <p><span class="error"><?php echo $api->error ?></span></p>
            <?php else: ?>
                <p><span class="highlight">CustomerKey</span>: <?php echo $api->customerKey ?></p>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

</body>
</html>