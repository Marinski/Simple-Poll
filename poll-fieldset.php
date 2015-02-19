<fieldset class="poll-fieldset">

    <legend>Къде е играл най-добре Валери Божинов?</legend>
    
    <form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
    
        <label>
            <input type="radio" name="Poll" value="levski" id="Poll_0" />
            Левски
         </label>
         
        <label>
            <input type="radio" name="Poll" value="cska" id="Poll_1" />
            ЦСКА
        </label>
        
        <label>
            <input type="radio" name="Poll" value="plaza" id="Poll_2" />
            Плаза
        </label>
    
        <input type="submit" name="submit" id="submit" value="Гласувай" class="btn btn-primary" />
        
        <input type="hidden" name="id" value="form1" />
        
        <input type="hidden" name="MM_insert" value="form1" />
    
    </form>

</fieldset><!-- /.poll-fieldset -->