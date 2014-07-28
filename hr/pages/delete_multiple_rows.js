$(document).ready(function () {
    zebra();

    $('.checkall').on('click', function () {
        var $this = $(this),
            // Test to see if it is checked
            checked = $this.prop('checked'),
            //Find all the checkboxes
            cbs = $this.closest('table').children('tbody').find('.checkbox');
        // Check or Uncheck them.
        cbs.prop('checked', checked);
        //toggle the selected class to all the trs
        cbs.closest('tr').toggleClass('selected', checked);
    });
    $('tbody tr').on('click', function () {
        var $this = $(this).toggleClass('selected');
        $this.find('.checkbox').prop('checked', $this.hasClass('selected'));
        if(!$this.hasClass('selected')) {
            $this.closest('table').children('thead').find('.checkall').prop('checked', false); 
        }
    });
    $('.delete_single').on('click', function(e){
        e.preventDefault();
        //Dont let the click bubble up to the tr
        e.stopPropagation();
        var $this = $(this),
            c = confirm('Are you sure you want to delete this row?');
        if(!c) { return false;}
        $this.closest('tr').fadeOut(function(){ $(this).remove(); zebra();});
    });
    $('a.deleteall').on('click', function(e){
        e.preventDefault();
        var $this = $(this), 
            $trows = $this.closest('table').children('tbody').find('tr.selected'),
            sel = !!$trows.length;
        
        // Don't confirm delete if no rows selected.
        if(!sel){
            alert('No rows selected');
            return false;
        }
        var c = confirm('Are you sure you want to delete the slected rows?');
        if(!c) { return false; }
        $trows.fadeOut(function(){ $trows.remove(); zebra(); });
    });
    
    
    //would be better if zebra was done in pure css
    function zebra(){
       $(".zebra-style").find('tbody')
           .find('.odd').removeClass('odd').end()
           .find('tr:odd').addClass("odd");
    };
});




HTML



<table class="zebra-style" id="dtable">
    <thead>
        <tr>
            <th scope="col">
                <input type="checkbox" class="checkall" />
            </th>
            <th scope="col">Country</th>
            <th scope="col">Population</th>
            <th scope="col">Area</th>
            <th scope="col">Official languages</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>United States of America</td>
            <td>306,939,000</td>
            <td>9,826,630 km2</td>
            <td>English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>United Kingdom</td>
            <td>61,612,300</td>
            <td>244,820 km2</td>
            <td>English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>India</td>
            <td>1,147,995,904</td>
            <td>3,287,240 km2</td>
            <td>Hindi, English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>Canada</td>
            <td>33,718,000</td>
            <td>9,984,670 km2</td>
            <td>English, French</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>Germany</td>
            <td>82,060,000</td>
            <td>357,021 km2</td>
            <td>German</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>United States of America</td>
            <td>306,939,000</td>
            <td>9,826,630 km2</td>
            <td>English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>United Kingdom</td>
            <td>61,612,300</td>
            <td>244,820 km2</td>
            <td>English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>India</td>
            <td>1,147,995,904</td>
            <td>3,287,240 km2</td>
            <td>Hindi, English</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>Canada</td>
            <td>33,718,000</td>
            <td>9,984,670 km2</td>
            <td>English, French</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" class="checkbox" />
            </td>
            <td>Germany</td>
            <td>82,060,000</td>
            <td>357,021 km2</td>
            <td>German</td>
            <td><a href="javascript:;" class="delete_single">delete</a>

            </td>
        </tr>
        <tfoot>
            <tr>
                <th colspan="6"><a href="javascript:;" class="deleteall" title="dtable">Delete Selected</a>

                </th>
            </tr>
        </tfoot>
    </tbody>
</table>


css 

table.zebra-style {
    font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    text-align:left;
    margin-bottom:25px;
}
table.zebra-style th {
    color: #fff;
    font-size: 14px;
    font-weight: normal;
    padding: 10px 8px;
    background:#666;
}
table.zebra-style td {
    color: #777;
    padding: 8px;
    font-size:13px;
}
table.zebra-style tr.odd {
    background:#f2f2f2;
}