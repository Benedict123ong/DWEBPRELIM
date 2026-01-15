<?php
include 'class/Account.php';
include 'class/Customer.php';

$accounts = [
    new Account("20995064", "Savings Account", 500000),
    new Account("20995065", "Checking Account", 67000),
    new Account("20995066", "Payroll Account", 15000),
    new Account("20995067", "Certificate of Deposits", 1500000)
];

$customer = new Customer("Benedict Mariano", "Ong", $accounts);

include 'includes/header.php';
?>

<h2><?php echo $customer->getFullName(); ?>’s Accounts</h2>
<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>

    <?php foreach ($customer->accounts as $account): ?>
        <tr>
            <td><?php echo $account->accountNumber; ?></td>
            <td><?php echo $account->accountType; ?></td>

            <?php if ($account->balance >= 0): ?>
                <td class="credit">
                    ₱<?php echo number_format($account->balance, 2); ?>
                </td>
            <?php else: ?>
                <td class="overdrawn">
                    ₱<?php echo number_format($account->balance, 2); ?>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
