<form method="POST" action="comprar.php">
    <script type="text/javascript"
        src="https://assets.pagar.me/checkout/checkout.js"
        data-button-text="Pagar"
        data-encryption-key="SUA_ENCRYPTION_KEY"
        data-amount="100000"
        data-customer-name="Victor Ferreira Silva"
        data-customer-address-street="Avenida X"
        data-customer-data="false"
        data-payment-methods="boleto,credit_card"
        data-ui-color="#bababa"
        data-postback-url="requestb.in/1234"
        data-create-token="false"
        data-free-installments="3"
        data-default-installment="5"
        data-header-text="Pagamento <?php echo date('m/Y'); ?>">
    </script>
</form>