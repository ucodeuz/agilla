<dl>
    <dt>Роль</dt>
    <dd class="employee_role">{{ $employee_view->employee_type ?? ''}}</dd>
</dl>
<dl>
    <dt>Имя и фамилия</dt>
    <dd class="employee_name">{{ $employee_view->name ?? ''}}</dd>
</dl>
<dl>
    <dt>Email</dt>
    <dd class="employee_email">{{ $employee_view->email ?? ''}}@prisma.uz</dd>
</dl>