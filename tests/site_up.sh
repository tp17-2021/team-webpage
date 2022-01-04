status=`curl -o /dev/null -s -w "%{http_code}\n" https://team17-21.studenti.fiit.stuba.sk`

if [[ $status -eq 200 ]]; then
        echo '---------- OK: site running'
        echo '---------- DONE'
        exit 0
else
	echo '---------- FAIL: site not running'
        exit 1
fi
