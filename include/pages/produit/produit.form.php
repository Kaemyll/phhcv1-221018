<div id="produit-form" style="display: flex; padding: 5px 25px">
    <h2>Edition de produit</h2>
    <form action="" method="get">
        id:XXX
        <label for="nomProduit">Nom du prduit : </label>
        <input type="text" name="nomProduit" id="id_nomProduit">
        <label for="catProduit">Catégorie</label>
        <select name="catProduit" id="id_catProduit">
            <option value="">une catégorie</option>
        </select>
        <hr/>
        <div id="produit-form-content" style="display: flex; padding: 5px 25px">
            <div style="width: 60%">
                <label for="descrProduit">Description</label><br />
                <textarea name="descrProduit" id="id_descrProduit" cols="30" rows="30" style="margin-left: 15%; width: 70%; resize : none"></textarea><br />
                <label for="eanProduit">Code-barre</label>
                <input type="text" name="eanProduit" id="id_eanProduit"><br />
                <label for="prixProduit">Prix</label>
                <input type="number" name="prixProduit" id="id_prixProduit" min="0.01" step="0.01">
            </div>
            <div style="flex: grow 1; padding: 5px 15px; text-align: center">
                <label for="urlImageProd">url image</label>
                <input type="text" name="urlImageProd" id="id_urlImageProd" style="max-width: 45vw; max-height: 45vh">
                <hr />
                <img src="" alt="" id="imageProd">
            </div>
        </div>
        <hr/>
        <div style="display: flex; justify-content:space-between;">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
            <button type="reset" class="btn btn-warning">Annuler</button>
        </div>
    </form>
</div>
