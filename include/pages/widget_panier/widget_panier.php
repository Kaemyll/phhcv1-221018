<?php
  session_start();
  var_dump($_SESSION);
?>

<div id="w-panier">
    <div class="w-panier-produit">
        <table class="w-panier-produit-table">
            <tr>
                <td><img class="w-panier-produit-img"
                        src="https://www.huezbikehire.com/wp-content/uploads/2020/11/PINARELLO-F12-NOIR-BLANC-1.jpg"
                        alt="" /></td>
                <td class="w-panier-produit-content-body">
                    <div>nom</div>
                    <div>quantite x prix</div>
                    <div class="w-panier-produit-buttons">
                        <button type="button" class="btn btn-warning">-</button>
                        <button type="button" class="btn btn-info">+</button>
                    </div>
                </td>
                <td>prix total</td>
            </tr>
        </table>
    </div>
    <hr />
    <div class="w-panier-produit-total">Total : total</div>

    <button type="button" class="btn btn-primary">valider</button>
</div>