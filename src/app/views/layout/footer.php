	</div>
</main>
<section id='modalW' class="flex" data-visible='hide'>
	<a id='close' title='Закрыть' class='flex'></a>
	<form action='' method="POST" class="flex" autocomplete="off">
		<h2 class="flex">Редактирование / Добавление</h2>
		<!-- Исполнитель -->
		<!-- <div class='inputs'>
			<label>
				<span>Имя *</span>
				<input type="text" name="doer[name]" placeholder="Введите ФИО исполнителя" required>
			</label>
			<label>
				<span>Должность *</span>
				<select name='doer[position]' required>
					<option disabled selected class='hidden'>Выберите должность</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</label>
		</div> -->

		<!-- Должность -->
		<!-- <div class='inputs'>
			<label>
				<span>Название должности *</span>
				<input type="text" name="position[name]" placeholder="Введите название должности" required>
			</label>
		</div> -->

		<!-- Состояние -->
		<!-- <div class='inputs'>
			<label>
				<span>Название состояния *</span>
				<input type="text" name="status[name]" placeholder="Введите название статуса" required>
			</label>
		</div> -->

		<!-- Задача -->
		<div class='inputs'>
			<label>
				<span>Название задачи *</span>
				<input type="text" name="task[name]" placeholder='Введите название задачи' required>
			</label>
			<label>
				<span>Исполнитель *</span>
				<select name='task[doer]' required>
					<option disabled selected class='hidden'>Выберите исполнителя</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</label>
			<label>
				<span>Состояние *</span>
				<select name='task[status]' required>
					<option disabled selected class='hidden'>Выберите состояние</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</label>
			<label>
				<span>Описание задачи</span>
				<textarea name='task[description]' placeholder="Введите описание задачи"></textarea>
			</label>
			<small>* - Обязательно для заполнения</small>
		</div>
		<div class='buts flex'>
			<input type="button" name="stop" value='Отмена'>
			<button>Сохранить</button>
		</div>
	</form>
</section>
</body>
</html>