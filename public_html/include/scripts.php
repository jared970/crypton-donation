<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.22/dist/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>

<script type="text/javascript">
    new ClipboardJS('.btn-copy');

    function copied() {
        new Noty({
            layout: 'bottomCenter',
            text: 'Address copied!',
            timeout: 2500,
        }).show();
    }
</script>
