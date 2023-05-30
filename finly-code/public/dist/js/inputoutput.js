function calculateMetrics() {
    

    
    document.getElementById("OUTPUT").style.visibility = "visible";
    // Get form values
    //const form = document.getElementById('simpleinput');
    const Sales = 123//form.elements.Sales.value;
    const Assets = 123//form.elements.Assets.value;
    const Inventory = 123//form.elements.Inventory.value;
    const COGS = 123//form.elements.COGS.value;
    const Liabilities = 123//form.elements.Liabilities.value;
    const operatingExpenses = 123//form.elements.operatingExpenses.value;
  
    // Calculate metrics
    const grossProfit = Sales - COGS;
    const operatingIncome = grossProfit - operatingExpenses;
    const currentLiquidity = Assets / Liabilities;
    const quickLiquidity = (Assets - Inventory) / Liabilities;
    const profitMargin = grossProfit / Sales;
    const returnOnAssets = grossProfit / Assets;
  
    // Display barchart
    const ctx1 = document.getElementById('salesChart').getContext('2d');
    const barChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Gross Profit', 'Operating Income'],
        datasets: [{
          label: 'Amount',
          data: [grossProfit, operatingIncome],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    const ctx2 = document.getElementById('liquidityChart').getContext('2d');
    const liquidityChart = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['Current Liquidity', 'Quick (Acid Test)'],
        datasets: [{
          label: 'Percentage',
          data: [currentLiquidity, quickLiquidity],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    const ctx3 = document.getElementById('profitabilityChart').getContext('2d');
    const profitabilityChart = new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ['Profit Margin on Sales', 'Return on Assets'],
        datasets: [{
          label: 'Percentage',
          data: [profitMargin, returnOnAssets],
          backgroundColor: [
          'rgba(128, 0, 128, 1)',
          'rgba(128, 0, 128, 0.8)',
          ], /* Purple */
          borderColor: 'White', /* Purple */
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
    
    gpText.innerHTML = grossProfit;
    oiText.innerHTML = operatingIncome;
    clText.innerHTML = currentLiquidity +"&#215;";
    atText.innerHTML = quickLiquidity +"&#215;";
    pmText.innerHTML = profitMargin +"&#215;";
    raText.innerHTML = returnOnAssets +"&#215;";

    document.getElementById("submit").style.visibility = "hidden";
    
  
}