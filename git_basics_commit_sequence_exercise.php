

/*
Репозиторий для работы находится в директории code-user. Перейти в нее нужно в терминале.

Вы добавили изменения в индекс, но потом решили разбить их на несколько коммитов. Еще вы вспомнили, что файла cooking.md в репозитории быть не должно.

Удалите из репозитория, но не из рабочей директории файл notes/cooking.md. Затем заигнорируйте его и создайте коммит.
После этого сделайте еще три коммита, которые содержат изменения в файлах в следующем порядке: README.md, notes/cli.md, notes/git.md.

*/



cd code-user/ # Переходим в директорию code-user
git reset
git rm --cached notes/cooking.md
echo 'notes/cooking.md' > .gitignore
git add .gitignore
git commit -m 'ignoring cooking.md'
git add README.md
git commit -m 'fix README.md'
git add notes/cli.md
git commit -m 'fix cli.md'
git add notes/git.md
git commit -m 'fix git.md'