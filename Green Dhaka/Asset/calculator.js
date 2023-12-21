document.addEventListener('DOMContentLoaded', function () {
    var submitButton = document.getElementById('submitButton');
    submitButton.addEventListener('click', calculateSubsidiary);

    var clearButton = document.getElementById('clearButton');
    clearButton.addEventListener('click', function () {
        document.getElementById('rArea').value = '';
        document.getElementById('gArea').value = '';
        document.getElementById('sArea').value = '';
        document.getElementById('result').innerHTML = '';
    });

    function calculateSubsidiary() {
        var rArea = parseFloat(document.getElementById('rArea').value);
        var gArea = parseFloat(document.getElementById('gArea').value);
        var sArea = parseFloat(document.getElementById('sArea').value);

        var resultContainer = document.getElementById('result');

        if (isNaN(rArea) || isNaN(gArea) || isNaN(sArea) || rArea <= 0 || gArea < 0 || sArea < 0) {
            resultContainer.innerHTML = 'Invalid measurements. Please enter valid numbers.';
        } else {
            var sum = gArea + sArea;

            if (sum > rArea) {
                resultContainer.innerHTML = 'Please check your measurements correctly.';
            } else {
                var ratio = ((sum / rArea) * 100) / 3;
                resultContainer.innerHTML = 'Your Subsidiary Reduction Percentage is ' + ratio.toFixed(2) + '%';
            }
        }
    }
});
