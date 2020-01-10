# Task Manager (TM) - Планировшик задач

> Тестовое задание для ООО "Digital Clouds", г. Новосибирск

ТЗ: https://docs.google.com/document/d/1HYsCI2KVWBk6gzw276kveHNz6CTCVIPgJNkPmHruWqc/

live demo: http://task.gfwe.ru

## База данных
Проанализировав ТЗ можно сразу нарисовать структуру базу данных.
По возможности подвести к нормальной форме.

```
tasks [table]( // Задачи
	id [int], // Уникальный ID задачи
	name [varchar], // Наименование задачи
	doer [int], // id исполнителя из таблицы "Исполнители" [Зависимость от doers.id]
	status [int], // id статуса выполнения задачи из таблицы "Статусы задачи" [Зависимость от statuses.id]
	description [text] // Описание задачи.
);

doers [table]( // Исполнители
	id [int], // Уникальный ID исполнителя
	name [varchar], // ФИО исполнителя
	position [int], // id должности из таблицы "Должности" [Зависимость от positions.id]
);

statuses [table]( // Статусы задач
	id [int], // Уникальный ID исполнителя
	name [varchar], // Название статуса
);

positions [table]( // Должности
	id [int], // Уникальный ID должности
	name [varchar], // Название должности
);
```