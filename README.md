# portfolio
My Portfolio

Git 최초 설정
--
git-scm 설치
github 에서 new repository 를 실행
작업폴더를 vscode 에서 폴더열기
터미털 창에서 git init
.gitignore 파일을 생성
(vscode에서 처음 한번만 실행) git config --global user.email "b@g.com" -- 5번 과정에서 왼쪽 패널의 파일이 비어있어야 함.(커밋이 완료된 상태)
git commit -m "first commit" // ... 의 모두 커밋을 눌러두 된다.
git remote add origin https://github.com/booldook/dothome.git
git push -u origin master

Git 설정 방법
--
git init
// git commit -m "first commit"
// 위의 코드보다는 vscode 의 모두 커밋을 실행
git remote add origin https://github.com/booldook/sample.git
// git push -u origin master
// 위의 코드보다는 vscode 의 푸시를 실행


Firebase 설치
--
firebase PC에서 환경설정

node.js 설치 (npm 설치) - 1번만
터미널에서 npm install -g firebase-tools 실행 - 1번만
터미널에서 firebase login - 1번만
폴더 생성하고, vscode 에서 폴더 열고, vscode 터미널을 켠다.
firebase 콘솔(웹)에서 프로젝트 생성
예) D:\test\ --> firebase init 실행
설치가 완료되면 firebase serve / firebase deploy
