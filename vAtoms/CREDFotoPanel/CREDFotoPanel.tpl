<div class="btn-group" role="group" aria-label="Basic example">
        
        <button type="button" name="submitNewFoto{$id}" class="btn btn-light" onclick="document.getElementById('submitFoto').click();">
            <span class="glyphicon glyphicon-plus"></span>
        </button> 

        <button type="submit" name="submitEditFoto{$id}" class="btn btn-light" onclick="vEditFoto('{$id}')" hidden="true">
            <span class="glyphicon glyphicon-pencil"></span>{$id}
        </button>
        
        <button type="submit" name="submitRotateRightFoto{$id}" class="btn btn-light" onclick="vRotateRightFoto('{$id}')">
            <span class="bi bi-arrow-clockwise"></span>
        </button>
        
        <button type="submit" name="submitMainFoto{$id}" class="btn btn-light" onclick="vMainFoto('{$id}')">
            <span class="bi bi-file-image-fill"></span>
        </button>
        
        <button type="submit" name="submitRotateLeftFoto{$id}" class="btn btn-light" onclick="vRotateLeftFoto('{$id}')">
            <span class="bi bi-arrow-counterclockwise"></span>
        </button>
        
        <button type="submit" name="submitDeleteFoto{$id}" class="btn btn-light" onClick="vDeleteFoto('{$id}')">
            <span class="glyphicon glyphicon-remove"></span>
        </button>

</div>