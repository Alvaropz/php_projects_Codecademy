<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = ($incomeSegments[0][0] *  $incomeSegments[0][1]) + ($incomeSegments[1][0] *  $incomeSegments[1][1]) + ($incomeSegments[2][0] *  $incomeSegments[2][1]);
$annualIncome = $netIncome - $socialSecurity;
echo "The Annual Income is: $annualIncome.";
$annualIncome -= ($annualExpenses["vacations"] + $annualExpenses["carRepairs"]);
echo "\nThe Annual Income after deducting annual expenses is $annualIncome.";

$monthlyIncome = ($annualIncome / 12);
echo "\nThe Monthly Income is: $monthlyIncome.";
$monthlyIncome -= ($monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"]);
echo "\nThe Monthly Income after deducting montly expenses is " . $monthlyIncome;

$weeklyIncome = ($monthlyIncome / 4.33);
echo "\nThe weekly income is: " . $weeklyIncome;
$weeklyIncome -= ($weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"]);
echo "\nThe weekly income after deducting the weekly expenses is " . $weeklyIncome;

$yearlySavings = $weeklyIncome * 52;
echo "\nThe annual savings are $yearlySavings";