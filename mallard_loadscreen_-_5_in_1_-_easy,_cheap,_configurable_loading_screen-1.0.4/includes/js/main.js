		var iFilesNeeded = 0;
		var iFilesTotal = 0;
		var bDownloadingFile = false;
		
		var iDifference = 0;
		var iPercentage = 0;
 
		function SetFilesNeeded( needed, total )
		{
			iFilesNeeded = needed;			
			RefreshFileBox();
		}
		function SetFilesTotal( total )
		{
			iFilesTotal = total;
			RefreshFileBox();
		}
		function DownloadingFile( filename )
		{
			if ( bDownloadingFile )
			{
				iFilesNeeded = iFilesNeeded - 1;
				RefreshFileBox();
			}
			document.getElementById( "download-item" ).innerHTML = "Downloading&nbsp;" + filename;
			bCanChangeStatus = false;
			setTimeout( "bCanChangeStatus = true;", 1000 );
			bDownloadingFile = true;
		}
		function SetStatusChanged( status )
		{
			if ( bDownloadingFile )
			{
				iFilesNeeded = iFilesNeeded - 1;
				bDownloadingFile = false;
				RefreshFileBox();
			}
			document.getElementById( "download-item" ).innerHTML = status;
			bCanChangeStatus = false;
			setTimeout( "bCanChangeStatus = true;", 1000 );
		}
		function RefreshFileBox()
		{
			iDifference = Math.round(iFilesTotal - iFilesNeeded);
			iPercentage = Math.round(iDifference / iFilesTotal * 100);
				
			document.getElementById( "percentage" ).innerHTML = iPercentage + "%";
			document.getElementById( "bar" ).innerHTML = "<div id='bar-width' style='width:" + iPercentage + "%;'></div>";
			
			if ( iFilesTotal > 0 )
				document.getElementById( "percentage" ).style.visibility = 'visible';
			else
				document.getElementById( "percentage" ).style.visibility = 'hidden';
		}
		RefreshFileBox();