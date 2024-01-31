

/*
Репозиторий для работы находится в директории code-user. Перейти в нее нужно в терминале.

Объедините коммиты с комментарием "fix git.md" в один коммит, то же самое сделайте с коммитами "fix cli.md".

Измените комментарий коммита "fix something" на "fix README.md".

В итоге последовательность коммитов в истории должна выглядеть так:

fix git.md
fix README.md
fix cli.md
remove cooking.md
# и далее более старые коммиты


*/



cd code-user/ # Переходим в директорию code-user
git rebase -i HEAD~7
# в редакторе редактируем список коммитов
pick 15da82c fix cli.md
s d4ae3e8 fix cli.md
s 6836505 fix cli.md
s 05cc245 fix cli.md
r 9a592d5 fix something
pick 74407fe fix git.md
s c3f34c5 fix git.md
# сохраняем и выходим из редактора
# git предложит отредактировать описания коммитов
# редактируем и сохраняем результат