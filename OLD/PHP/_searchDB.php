<div class="search-container">
	<input id="searchBox" type="text" placeholder="Search.." name="search" list="searchDb"
		onkeydown="doSearchKey(event)" spellcheck="false" required>
	<button id="searchBtn" type="submit" onclick="doSearch()" value="search">
		<i class="fas fa-search"></i>
	</button>
</div>