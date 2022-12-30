   <button class="btn btn-primary" id="nomen{$idNomen}" name="nomen{$idNomen}" onclick="vSetNomen({$idNomen})">
       <span class="bi bi-cart-plus-fill" id="nomenspan{$idNomen}" name="nomenspan{$idNomen}">{$buttonName}</span>
   </button>

   {literal}
       <script type="text/javascript">
           function vSetNomen(id) {
               var fd = new FormData();
               fd.append('vSetNomen', 1);
               fd.append('nomenid', id);

               vAjaxsOrder(fd);
           }

           function vAjaxsOrder(fd) {
               $.ajax({
                   url: '/Cart/Ajax/',
                   data: fd,
                   processData: false,
                   contentType: false,
                   type: 'POST',
                   success: function(data) {
                       editNomenButton(data);
                   }
               });
           }
           //Показываем на кнопке количество товаров в корзине
           function editNomenButton(msg) {
               var str = JSON.parse(msg);
               $('#nomenspan' + str.id).text('в корзине ' + str.count);
           };
       </script>
    {/literal}