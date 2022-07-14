# storage
Реализация класса хранилища

Тестовое задание: 
Общие сведения
Есть процесс, который следит за ценами всех фьючерсов на бирже. Регулярно через некоторый интервал времени процесс получает текущие цены фьючерсов с биржи и вычисляет движение цен за различные промежутки времени от текущего момента: 5 мин, 15 мин, 1 ч, 4 ч, 24 ч
Задача
Разработать класс, реализующий хранилище исторических данных о цене некоторого фьючерса.
Интерфейс класса должен предоставить потребителю следующие возможности:
- добавить в хранилище очередное значение цены и время его получения;
- получить минимальное и максимальное значение цены за определенный промежуток.
Условия работы
По таймеру каждые 5 секунд процесс получает текущую цену фьючерса, добавляет ее в хранилище и запрашивает минимальное и максимальное значение цены за каждый промежуток времени, перечисленный выше.
Разрабатываемый класс внутри себя не должен применять обход массива цен для поиска минимума/максимума на каждой итерации процесса. Обход массива можно применить только тогда, когда это действительно необходимо. Это относится и к функциям php, выполняющих внутри себя итерацию по массиву.
Код сопроводить комментариями.
