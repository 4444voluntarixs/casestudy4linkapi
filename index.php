<html>
<head>
    <title>Estudo de Caso - LinkApi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
        integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>    
    
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liceu Ada Lovelace</h1>
            <h2><?php echo date('m/Y') ?></h2>
            
            <div class="form-group">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="item_4" value="1200">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Mensalidade (R$ 1200,00)</span>
              </label>
            </div>
            
            <div class="form-group">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="item_1" value="99">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Uniforme Esportivo 2 (R$ 99,00)</span>
              </label>
            </div>
            
            <div class="form-group">
              <label class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="item_2" value="220">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Cr&eacute;dito Mensal Antecipado na Cantina (R$ 220,00)</span>
              </label>
            </div>
            
            <div class="form-group">
              <label class="custom-control custom-checkbox"> 
                <input type="checkbox" class="custom-control-input" id="item_3" value="310">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Visita na Escola-Fazenda - Atibaia (R$ 310,00)</span>
              </label>
            </div>
            
            
                
            
            <h2>Valor: R$ <span id="total">0,00</span></h2>
            
        </div>
        
        
    </div>
    <div class="row pagar">
        <div class="col-md-12">
            <?php include "checkout.php" ?>
        </div>
    </div>
</div>

<script type="text/javascript">
/* global $ */
var total = 0;
$(function() {
    $('.custom-control-input').removeAttr('checked');
    $('.pagar').hide();
    
    $('.custom-control-input').on('click',function(){
        var item = $(this);
        
        
        if (item.is(':checked'))
            total += parseInt(item.val());
        else
            total -= parseInt(item.val());
            
        $('#total').html(total.toFixed(2).replace(".", ","));
        
        if (total > 0) {
            $('.pagar').show();
            $('#form_pagar').prop('data-amount',total);
        } else {
            $('.pagar').hide();
            $('#form_pagar').prop('data-amount',0);
        }
    });
});
    
</script>
</body>
</html>