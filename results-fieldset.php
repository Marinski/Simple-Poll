<fieldset class="result-fieldset">
    
    <legend>Резултати</legend>
    
    <ul>
        <li>
            Левски /<span class="total-votes"><?php echo $num_rowsQuestion1 ?></span> гласа/
            <br />
            <div class="results-bar" style="width: <?php echo round($percentQuestion1,2); ?>%;">
                 <?php echo round($percentQuestion1,2); ?>%
            </div>
        </li>
        
        <li>
            ЦСКА /<span class="total-votes"><?php echo $num_rowsQuestion2 ?></span> гласа/
            <div class="results-bar" style="width: <?php echo round($percentQuestion2,2); ?>%;">
                 <?php echo round($percentQuestion2,2); ?>%
            </div>
        </li>
    
        <li>
            Плаза /<span class="total-votes"><?php echo $num_rowsQuestion3 ?></span> гласа/
            <div class="results-bar" style="width: <?php echo round($percentQuestion3,2); ?>%;">
                 <?php echo round($percentQuestion3,2); ?>%
            </div>
        </li>
    
    </ul>
    
    <a href="poll.php" class="btn btn-default">Обратно към гласуването</a>
    
    <span id="total-votes">Общо гласували: <?php echo $totalRows_rs_vote ?></span>
    
</fieldset><!-- /.result-fieldset -->