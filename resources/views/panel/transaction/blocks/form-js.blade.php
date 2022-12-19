<script type="text/javascript">
// userList Search
    $(function () {
        var opts = $('#usersList option').map(function () {
            return [[this.value, $(this).text()]];
        });
        $('#searchInput').keyup(function () {
            var rxp = new RegExp($('#searchInput').val(), 'i');
            var optlist = $('#usersList').empty();
            opts.each(function () {
                if (rxp.test(this[1])) {
                    optlist.append($('<option/>').attr('value', this[0]).text(this[1]));
                }
            });
        });
    });
// Amount Input seperate numbers with commas
    function ReplaceNumberWithCommas(yourNumber) {
            var n = yourNumber.toString().split(".");
            n[0] = n[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return n.join(".");
        }

        $(".price").on('keyup keypress change',function () {
            $(this).val(ReplaceNumberWithCommas($(this).val().replace(/,/g, '')));
        });

        $("#transForm").submit(function () {
            $(".price").each(function () {
                $(this).val($(this).val().replace(/,/g, ''));
            });
        });
</script>