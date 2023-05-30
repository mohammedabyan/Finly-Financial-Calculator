function calculateMetrics() {
  document.getElementById("OUTPUT").style.visibility = "visible";
    // Get form values
    const form = document.getElementById('simpleinput');
    const Sales = form.elements.Sales.value;
    const Assets = form.elements.Assets.value;
    const Inventory = form.elements.Inventory.value;
    const COGS = form.elements.COGS.value;
    const Liabilities = form.elements.Liabilities.value;
    const operatingExpenses = form.elements.operatingExpenses.value;
  
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
    const liquidityChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Current Liquidity', 'Quick (Acid Test)'],
        datasets: [{
          label: 'Amount',
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
    const profitabilityChart = new Chart(ctx1, {
      type: 'bar',
      data: {
        labels: ['Profit Margin on Sales', 'Return on Assets'],
        datasets: [{
          label: 'Amount',
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
  
    

    
  
}