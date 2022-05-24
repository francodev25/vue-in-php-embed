
<div>
    <input id="idAmplificador" name="idAmplificador"/>
    <button onclick="selectValue(event)">Select</button>
</div>

<script>
    
    function selectValue(event){
        let idAmpli = document.getElementById('idAmplificador').value;
        document.getElementById('idAmpli2').value = idAmpli;
    }
</script>
<script src="./vue2-vite/dist/assets/js/main.js" type="text/javascript"></script>

</body>
</html>