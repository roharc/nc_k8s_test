# nc_k8s_test
Test deployment of a nextcloud instance in kubernetes with mysql db and persistent volumes attached via nfs. Works fine but has one issue: 
When scaling up to more than one single replica it becomes unstable and nextcloud ui throws errors: "problem loading page, will reload in 5..4..3..2..1 seconds"
often followed by a logout of the user. No errors in pod logs.
