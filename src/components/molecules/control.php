<div class="control" style="position: relative;">
    <div id="bottomHistoryNav" class="historyNav">
    </div>
    <div class="row">
        <div class="num button">
            <p>&#37;</p>
        </div>
        <div class="num button">
            <p>CE</p>
        </div>
        <div class="num button">
            <p>C</p>
        </div>
        <div class="num button">
            <p>&#8592;</p>
        </div>
    </div>
    <div class="row">
        <div onclick="count(0, '1/x');" class="num button">
            <p>&#8543;&#8339;</p>
        </div>
        <div onclick="count(0, 'x2');" class="num button">
            <p>&#8339;&#178;</p>
        </div>
        <div onclick="count(0, 'x3');" class="num button">
            <p>&#8339;&#179;</p>
        </div>
        <div onclick="count(0, '/');" class="num button">
            <p>&#247;</p>
        </div>
    </div>
    <div class="row">
        <div onclick="count(7, 0);" class="input num button mainNum mainControl">
            <p>7</p>
        </div>
        <div onclick="count(8, 0);" class="input num button mainNum mainControl">
            <p>8</p>
        </div>
        <div onclick="count(9, 0);" class="input num button mainNum mainControl">
            <p>9</p>
        </div>
        <div onclick="count(0, '*');" class="input num button">
            <p>&#215;</p>
        </div>
    </div>
    <div class="row">
        <div onclick="count(4, 0);" class="num button mainNum mainControl">
            <p>4</p>
        </div>
        <div onclick="count(5, 0);" class="num button mainNum mainControl">
            <p>5</p>
        </div>
        <div onclick="count(6, 0);" class="num button mainNum mainControl">
            <p>6</p>
        </div>
        <div onclick="count(0, '-');" class="num button">
            <p>-</p>
        </div>
    </div>
    <div class="row">
        <div onclick="count(1, 0);" class="num button mainNum mainControl">
            <p>1</p>
        </div>
        <div onclick="count(2, 0);" class="num button mainNum mainControl">
            <p>2</p>
        </div>
        <div onclick="count(3, 0);" class="num button mainNum mainControl">
            <p>3</p>
        </div>
        <div onclick="count(0, '+');" class="num button">
            <p>+</p>
        </div>
    </div>
    <div class="row">
        <div onclick="count('+/-', 0);" class="num button mainControl plusminus">
            <p>&#8314; &#8260; &#8331;</p>
        </div>
        <div onclick="count(0, 0);" class="num button mainNum mainControl">
            <p>0</p>
        </div>
        <div onclick="count(',', 0);" class="num button mainControl">
            <p>,</p>
        </div>
        <div onclick="count(0, '=');" class="num button equalControl">
            <p>=</p>
        </div>
    </div>
</div>

<script>
    function openHistory() {
        document.getElementById('bottomHistoryNav').style.height = '100%';
        document.getElementById('thisCloseHistory').style.height = '100%';
    }
    
    function closeHistory() {
        document.getElementById('bottomHistoryNav').style.height = '0';
        document.getElementById('thisCloseHistory').style.height = '0';
    }

    function count(x, y) {
        
        if (x===0) {
            // alert(y);
            //logic

            //view only
            switch (y) {
                case '*':
                    y = '&#215;';
                    break;
            
                default:
                    break;
            }
            $('#counting').append(' ' + y + ' ');
        } else {
            // alert(x);
            // if ($('#resultCount').text() === 0) {
            //     $('#resultCount').text(0);
            // } else {
            //     $('#counting').append(x);
            //     $('#resultCount').append(x);
            // }

            if ($('#resultCount').text() === 0 && x===0 && y===0) {
                $('#resultCount').text(0);
            } else {
                $('#counting').append(x);
                $('#resultCount').append(x);
            }
        }
    }

    // $(document).ready(function(){
    //         $(".input").click(function(){
    //             $("output").hide();
    //         });
    //     });
</script>