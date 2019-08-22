# redis-cache
 This repository is used to save data in cache file using redis driver provided by Codeigniter framework. For using this, we will fetch the data from cache. If there is no cache file for any data then after call model for fetching the data from database and save that data in cache.
	
# Steps
1. refer the test file located in controller folder.
				- In constructor function, load the model and driver.
				- In cache function, set the key with the data whatever we want to save if that key is not already saved.
						After set the key, one cache file for that particular key is generated.
						So that every time we will fetch the data from the cached file with the specified key.
						If that key is not set then call model for fetching the data from database.
				- Delete function is used to delete the set key.
				
2. For run the project: http://localhost/redis-cache/index.php/test/cache
	
				
				
				
	
