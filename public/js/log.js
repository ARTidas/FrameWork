$(document).ready(
    setInterval(getNewLogRecords, 3000)
);

function getNewLogRecords()
{
	$.ajax({
		url      : "getNewLogs",
		method   : "post",
		data     : {lastLogRecordId: logsElement.children().first().attr('id').replace('log', '')},
		dataType : "json",
		success  : function(response) {
			$.each(
				$.parseJSON(response.content),
				function(key, logJson) {

					$('<div id="log' + logJson.id + '" class="newLog">'
						+ '<span class="logField">' + logJson.level + ' </span>'
						+ '<span class="logField">' + logJson.created_at + ' </span>'
						+ '<span class="logField"><strong>' + logJson.file + ' </strong></span>'
						+ '<span class="logField"><strong>' + logJson.line + ' </strong></span>'
						+ '<br/>'
						+ '<span class="logField">' + logJson.message + ' </span>'
						+ '<br/>'
						+ '<span class="logField">' + logJson.context + ' </span>'
						+ '</div>'
					)
						.prependTo("#logs")
						.hide()
						.fadeIn("slow")
					;
				}
			);
		}
	});


}