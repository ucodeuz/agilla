<form class="modal-content">
  <div class="modal-header">
    <div class="modal-title">Сотрудник<span class="employee_count"></span></div>
    <button type="button" class="close" data-dismiss="modal"><i class="icon icon-close"></i></button>
  </div>
  <div class="modal-body">
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
  </div>
</form>