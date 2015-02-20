<fieldset class="poll-fieldset">

    <script>
    function validateForm() {
        var x = document.forms["form1"]["Poll"].value;
        if (x == null || x == "") {
            alert("Анкетата трябва да бъде попълнена, преди да изпратите своя глас");
            return false;
        }
    }
    </script>

    <legend>Къде е играл най-добре Валери Божинов?</legend>

    <form action="<?php $editFormAction; ?>" id="form1" name="form1" method="POST" onsubmit="return validateForm()">

    

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
        <?php if(isset( $_POST['submit']) && $msg!='' )
        {?>
            <div class="erroroutput"><p><?php echo $msg; ?><br></p></div>

        <?php } elseif (isset( $_POST['submit'])) { ?>
        
        <a class="btn btn-default results" href="http://creatingaform.prleo.com/results.php">Благодарим Ви. Вижте РЕЗУЛТАТИТЕ</a>
        <?php }?>


        <input type="hidden" name="id" value="form1" />

        

        <input type="hidden" name="MM_insert" value="form1" />

    

    </form>



</fieldset><!-- /.poll-fieldset -->