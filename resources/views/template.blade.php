<h1>Document Control</h1>
<table>
    <thead>
    <tr>
        <td><strong>Published Date</strong></td>
        <td>{{ $today }}</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><strong>Policy Owner</strong></td>
        <td>{{ $owner->name }}, {{ $owner->jobtitle }}</td>
    </tr>
    <tr>
        <td><strong>Policy Approver</strong></td>
        <td>{{ $approver->name }}, {{ $approver->jobtitle }}</td>
    </tr>
    <tr>
        <td><strong>Policy Reviewer(s)</strong></td>
        <td>{{ $reviewer->name }}, {{ $reviewer->jobtitle }}</td>
    </tr>
    <tr>
        <td><strong>Policy Review Period</strong></td>
        <td>{{ $interval }}</td>
    </tr>
    <tr>
        <td><strong>Policy Audience</strong></td>
        <td>{{ $audience }}</td>
    </tr>
    </tbody>
</table>
<h1>Purpose and Scope</h1>
<ol type="a">
    <li><p>The purpose of this policy is to define procedures to onboard and offboard users to technical infrastructure
            in a manner that minimises the risk of information loss or exposure.</p></li>
    <li><p>This policy applies to all technical infrastructure within {{ $name }}.</p></li>
    <li><p>This policy applies to all full-time and part-time employees and contractors.</p></li>
</ol>
<h1>Background</h1>
<ol type="a">
    <li><p>In order to minimise the risk of information loss or exposure (from both inside and outside the
            organisation), {{ $name }} is reliant on the principle of least privilege. Account creation and permission
            levels are restricted to only the resources absolutely needed to perform each person’s job duties. When a
            user’s role within {{ $name }} changes, those accounts and permission levels are changed/revoked to fit the
            new role and disabled when the user leaves {{ $name }} altogether.</p></li>
</ol>
<h1>Policy</h1>
<ol type="a">
    <li><p><em>During onboarding:</em></p>
        <ol type="i">
            <li><p>Hiring Manager informs HR upon hire of a new employee.</p></li>
            <li><p>HR emails IT to inform them of a new hire and their role.</p></li>
            <li><p>IT creates a checklist of accounts and permission levels needed for that role.</p></li>
            <li><p>The owner of each resource reviews and approves account creation and the associated permissions.</p>
            </li>
            <li><p>IT works with the owner of each resource to set up the user.</p></li>
        </ol>
    </li>
    <li><p><em>During offboarding:</em></p>
        <ol type="i">
            <li><p>Hiring Manager notifies HR when an employee has been terminated.</p></li>
            <li><p>HR sends a weekly email report to IT summarizing list of users terminated and instructs IT to disable
                    their access.</p></li>
            <li><p>IT terminates access within five business days from receipt of notification.</p></li>
        </ol>
    </li>
    <li><p><em>When an employee changes roles within {{ $name }}:</em></p>
        <ol type="i">
            <li><p>Hiring Manager will inform HR of a change in role.</p></li>
            <li><p>HR and IT will follow the same steps as outlined in the onboarding and offboarding procedures.</p>
            </li>
        </ol>
    </li>
    <li><p><em>Review of accounts and permissions:</em></p>
        <ol type="i">
            <li><p>Each month, IT and HR will review accounts and permission levels for accuracy.</p></li>
        </ol>
    </li>
</ol>
