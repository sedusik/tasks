

/*
Репозиторий для работы находится в директории code-user. Перейти в нее нужно в терминале.

Найдите в истории коммит с комментарием "add note about installing git on linux" и удалите все коммиты, которые идут после него.
Так вы откатите состояние репозитория до этого коммита.

*/

cd code-user/ # Переходим в директорию code-user
git log --oneline --grep="add note about installing git on linux"
git reset --hard 548ac6a5