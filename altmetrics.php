<?php include 'header.php'; ?>
<div class="container-lg">
	<div class="text-center text-head py-2">
		<h1 class="h1">Altmetrics</h1>
	</div>
	<div class="text-body">
		<p class="text-justify">
			The rapid growth of the Internet and social media has not only transformed the businesses,
			organizations and society, but has also changed the entire process of scholarly information
			processing, including article storage, access and dissemination. Scholarly articles are now
			mentioned or shared on different social media platforms such as ResearchGate, Twitter, Facebook,
			Academia and Mendeley. Social media coverage and transactions about scholarly articles has
			become so popular that a new range of metrics have been developed, called <strong>Altmetric</strong>
			(for alternative metric), to measure and characterize the social media coverage and transaction patterns.
			Altmetrics is now an interesting area of research where researchers try to analyze the social
			media coverage and consumption of scholarly articles; and sometimes even use them to predict
			the future citations of scholarly articles.
			<br>
			Several studies have tried to explore different aspects of Altmetrics, such as demonstration
			of social media platforms being used as a tool to attract attention towards a published work, or
			correlating with citations to check for compliments of citations. Alongwith such interconnections
			between altmetrics and scientometrics, focus was also made on country/region specific analysis,
			or comparison on online media based indicators.
			<br>
			Although much study and research was done on altmetrics, the research from India, based on
			how much research output was covered and mentioned within the social media and other related
			research, was almost negligible. So a study was made to provide an analysis of such queries.
		</p>
		<p class="text-justify">
			The data for the study was collected from two sources : Web of Science(WoS)
			and <a href="http://www.altmetric.com">Altmetric.com</a>. The data from WoS was from India
			during 2016. A total of 91,106 publication records were found for India, out of which 88,259
			publication records are unique.
			Out of these 88,259 records, 76,621 records were found to be having DOI. For each downloaded
			record, standard dataset fields like Title, Authors, Publication Type, Publication Source,
			Citations, References etc. were obtained. In order to compare the altmetric coverage of India
			with world-average, the data for the whole world for the corresponding year was also downloaded.
			A total of 2,528,868 publication records were found for the whole world, out of which 1,460,124
			records were found to be having DOI.
			<br>
			Secondly, altmetric data was obtained for the publication records found in WoS through a DOI
			lookup in altmetric.com website. Out of 76,621 records found in WoS for India having DOI, a total
			of 21,644 records (approx. 28.5%) were found covered in altmetric.com.</p>
		<table class="table table-striped table-bordered table-sm">
			<caption>Coverage of Articles from India in different Social platforms as captured by
				altmetric.com
			</caption>
			<thead class="table-dark">
				<tr>
					<th>Mention Type</th>
					<th>TP</th>
					<th>Percentage (%)<sup>*</sup></th>
					<th>Total Mention</th>
					<th>Mention Per Paper</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mendeley</td>
					<td>20,815</td>
					<td>27.2</td>
					<td>353817</td>
					<td>16.998</td>
				</tr>
				<tr>
					<td>Attention Score</td>
					<td>18,449</td>
					<td>24.1</td>
					<td>136222</td>
					<td>7.384</td>
				</tr>
				<tr>
					<td>Twitter</td>
					<td>16,569</td>
					<td>21.6</td>
					<td>102176</td>
					<td>6.167</td>
				</tr>
				<tr>
					<td>Facebook</td>
					<td>3,594</td>
					<td>4.7</td>
					<td>6960</td>
					<td>1.937</td>
				</tr>
				<tr>
					<td>News Mentions</td>
					<td>1,455</td>
					<td>1.9</td>
					<td>9528</td>
					<td>6.548</td>
				</tr>
				<tr>
					<td>Blog</td>
					<td>949</td>
					<td>1.2</td>
					<td>1892</td>
					<td>1.994</td>
				</tr>
				<tr>
					<td>Google</td>
					<td>517</td>
					<td>0.7</td>
					<td>1695</td>
					<td>3.279</td>
				</tr>
				<tr>
					<td>Wiki</td>
					<td>496</td>
					<td>0.6</td>
					<td>760</td>
					<td>1.532</td>
				</tr>
				<tr>
					<td>Reddit</td>
					<td>229</td>
					<td>0.3</td>
					<td>270</td>
					<td>1.179</td>
				</tr>
				<tr>
					<td>Policy</td>
					<td>157</td>
					<td>0.2</td>
					<td>229</td>
					<td>1.459</td>
				</tr>
				<tr>
					<td>Peer Review</td>
					<td>149</td>
					<td>0.2</td>
					<td>315</td>
					<td>2.114</td>
				</tr>
				<tr>
					<td>F1000</td>
					<td>137</td>
					<td>0.2</td>
					<td>151</td>
					<td>1.102</td>
				</tr>
				<tr>
					<td>Patent</td>
					<td>68</td>
					<td>0.1</td>
					<td>80</td>
					<td>1.176</td>
				</tr>
			</tbody>
		</table>
		<sup>*</sup>w.r.t. to total papers for 2016 for India indexed in WoS with DOI= 76,621
		<!-- Table 1 end-->
		<br><br>
		<p class="text-justify">
			Similarly, for the world, out of 1,460,124 records in WoS with DOI, a total of 681,274 records
			(approx. 47%) were found to be covered in altmetric.com.The altmetric.com website is a data
			repository which collates attentions and mentions about scholarly articles from a wide range
			of online networks and media. It provides 18 different types of online data, including from
			different networks like Twitter, Facebook, Weibo, Google Plus, LinkedIn; online news, blog-sites;
			news and information aggregators like Reddit, Pinterest; academic networks like Mendeley, F1000;
			and online encyclopaedia like Wikipedia. It also generates an aggregated score for each scholarly
			article by combining data from different platforms.
			<br>
			Some data of ResearchGate platform is also shown in results for comparison with present results.
			For each record in WoS, ResearchGate platform was searched by the crawler to extract relevant data.
		</p>
		<table class="table table-striped table-bordered table-sm">
			<caption>Coverage of Articles from the World in different Social platforms as captured by
				altmetric.com
			</caption>
			<thead class="table-dark">
				<tr>
					<th>Mention Type</th>
					<th>TP</th>
					<th>Percentage (%)*</th>
					<th>Total</th>
					<th>Mentions Per Paper</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mendeley</td>
					<td>634825</td>
					<td>43.5</td>
					<td>17743006</td>
					<td>27.949</td>
				</tr>
				<tr>
					<td>Attention Score</td>
					<td>542363</td>
					<td>37.1</td>
					<td>6813120</td>
					<td>10.001</td>
				</tr>
				<tr>
					<td>Twitter</td>
					<td>50,833</td>
					<td>34.4</td>
					<td>4441526</td>
					<td>8.851</td>
				</tr>
				<tr>
					<td>Facebook</td>
					<td>133439</td>
					<td>9.1</td>
					<td>308801</td>
					<td>2.314</td>
				</tr>
				<tr>
					<td>News Mentions</td>
					<td>69261</td>
					<td>4.7</td>
					<td>533952</td>
					<td>7.709</td>
				</tr>
				<tr>
					<td>Blog</td>
					<td>46802</td>
					<td>3.2</td>
					<td>91557</td>
					<td>1.956</td>
				</tr>
				<tr>
					<td>Google</td>
					<td>21108</td>
					<td>1.4</td>
					<td>48986</td>
					<td>2.321</td>
				</tr>
				<tr>
					<td>Wiki</td>
					<td>13674</td>
					<td>0.9</td>
					<td>20521</td>
					<td>1.501</td>
				</tr>
				<tr>
					<td>Reddit</td>
					<td>9273</td>
					<td>0.6</td>
					<td>12462</td>
					<td>1.344</td>
				</tr>
				<tr>
					<td>Policy</td>
					<td>9244</td>
					<td>0.6</td>
					<td>12497</td>
					<td>1.352</td>
				</tr>
				<tr>
					<td>Peer Review</td>
					<td>3027</td>
					<td>0.2</td>
					<td>5457</td>
					<td>1.803</td>
				</tr>
				<tr>
					<td>F1000</td>
					<td>7025</td>
					<td>0.5</td>
					<td>8148</td>
					<td>1.16</td>
				</tr>
				<tr>
					<td>Patent</td>
					<td>6309</td>
					<td>0.4</td>
					<td>9515</td>
					<td>1.508</td>
				</tr>
			</tbody>
		</table>
		<sup>*</sup>w.r.t. to total papers for 2016 for world in WoS= 1,460,124
		<!-- Table 2 end --><br><br>
		<img src="images/altmetric/alt_1.png" alt="Ratio of data values for different platforms for India
                        and the World." style="width: 50%" id="pic">
		<br>
		<p class="text-justify">
			From the figure, showing the ratio of data values for different platforms for India and the World,
			it can be seen that India’s share of altmetric coverage to the world lies between 2 to 5% for
			different platforms. This may be related to India’s contribution to annual publication
			data indexed in Web of Science, which is approx. 5%.
		</p>
		<p class="text-justify">
			The downloaded data was analysed and tagged into one of 14 various disciplines as mentioned in WoS
			tag field. One record can be tagged with multiple disciplines of research based on its WC entries.
			The different disciplines are :
		</p>
		<ul style="columns: 2">
			<li>Agriculture (AGR)</li>
			<li>Art & Humanities (AH)</li>
			<li>Biology (BIO)</li>
			<li>Chemistry (CHE)</li>
			<li>Engineering (ENG)</li>
			<li>Environment Science (ENV)</li>
			<li>Geology (GEO)</li>
			<li>Information Sciences (INF)</li>
			<li>Material Science (MAR)</li>
			<li>Mathematics (MAT)</li>
			<li>Medical Science (MED)</li>
			<li>Multidisciplinary (MUL)</li>
			<li>Physics (PHY)</li>
			<li>Social Science (SS)</li>
		</ul>
		<p class="text-justify">
			The first analytical result obtained shows overall altmetric coverage of research output from
			India. Out of total 76,621 research papers published from India as indexed in Web of Science
			with DOI, only 21,644 records are found to be included in altmetric.com, i.e. 28.5% of the
			research output from India is covered in social media platforms.
			<br>
			It can be observed that Mendeley has the highest coverage percentage of 27.2%, followed by
			Attention Score with coverage of 24.1%, Twitter with 21.6% and Facebook with 4.7% coverage.
		</p>
		<table class="table table-striped table-bordered table-sm">
			<caption>Discipline-wise Variations in Coverage in different platforms for Publications
				from India
			</caption>
			<thead class="table-dark">
				<tr>
					<th rowspan="2">Discipline</th>
					<th rowspan="2">Articles in WoS</th>
					<th colspan="2">Twitter</th>
					<th colspan="2">Facebook</th>
					<th colspan="2">New Mention</th>
					<th colspan="2">Mendeley</th>
				</tr>
				<tr>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>AGR</td>
					<td>4,099</td>
					<td>840</td>
					<td>20.5</td>
					<td>286</td>
					<td>7</td>
					<td>79</td>
					<td>1.9</td>
					<td>1,159</td>
					<td>28.3</td>
				</tr>
				<tr>
					<td>AH</td>
					<td>2,318</td>
					<td>356</td>
					<td>15.4</td>
					<td>79</td>
					<td>3.4</td>
					<td>15</td>
					<td>0.6</td>
					<td>463</td>
					<td>20</td>
				</tr>
				<tr>
					<td>BIO</td>
					<td>8,626</td>
					<td>3,307</td>
					<td><strong>38.3</strong></td>
					<td>569</td>
					<td>6.6</td>
					<td>374</td>
					<td>4.3</td>
					<td>3,832</td>
					<td><strong>44.4</strong></td>
				</tr>
				<tr>
					<td>CHE</td>
					<td>14,270</td>
					<td>2,937</td>
					<td>20.6</td>
					<td>392</td>
					<td>2.7</td>
					<td>181</td>
					<td>1.3</td>
					<td>3,571</td>
					<td>25</td>
				</tr>
				<tr>
					<td>ENG</td>
					<td>9,694</td>
					<td>569</td>
					<td>5.9</td>
					<td>98</td>
					<td>1</td>
					<td>35</td>
					<td>0.4</td>
					<td>1,129</td>
					<td>11.6</td>
				</tr>
				<tr>
					<td>ENV</td>
					<td>4,930</td>
					<td>1,151</td>
					<td>23.3</td>
					<td>254</td>
					<td>5.2</td>
					<td>93</td>
					<td>1.9</td>
					<td>1,533</td>
					<td>31.1</td>
				</tr>
				<tr>
					<td>GEO</td>
					<td>4,105</td>
					<td>1,053</td>
					<td>25.7</td>
					<td>149</td>
					<td>3.6</td>
					<td>73</td>
					<td>1.8</td>
					<td>1,465</td>
					<td>35.7</td>
				</tr>
				<tr>
					<td>INF</td>
					<td>3,890</td>
					<td>277</td>
					<td>7.1</td>
					<td>44</td>
					<td>1.1</td>
					<td>20</td>
					<td>0.5</td>
					<td>492</td>
					<td>12.6</td>
				</tr>
				<tr>
					<td>MAR</td>
					<td>9,856</td>
					<td>1,110</td>
					<td>11.3</td>
					<td>152</td>
					<td>1.5</td>
					<td>49</td>
					<td>0.5</td>
					<td>1,536</td>
					<td>15.6</td>
				</tr>
				<tr>
					<td>MAT</td>
					<td>2,641</td>
					<td>224</td>
					<td>8.5</td>
					<td>31</td>
					<td>1.2</td>
					<td>9</td>
					<td>0.3</td>
					<td>319</td>
					<td>12.1</td>
				</tr>
				<tr>
					<td>MED</td>
					<td><strong>22,676</strong></td>
					<td><strong>6,955</strong></td>
					<td>30.7</td>
					<td><strong>1,785</strong></td>
					<td>7.9</td>
					<td><strong>690</strong></td>
					<td>3</td>
					<td><strong>8,258</strong></td>
					<td>36.4</td>
				</tr>
				<tr>
					<td>MUL</td>
					<td>2,472</td>
					<td>922</td>
					<td>37.3</td>
					<td>271</td>
					<td><strong>11</strong></td>
					<td>164</td>
					<td><strong>6.6</strong></td>
					<td>1,096</td>
					<td>44.3</td>
				</tr>
				<tr>
					<td>PHY</td>
					<td>14,255</td>
					<td>2,250</td>
					<td>15.8</td>
					<td>293</td>
					<td>2.1</td>
					<td>120</td>
					<td>0.8</td>
					<td>2,857</td>
					<td>20</td>
				</tr>
				<tr>
					<td>SS</td>
					<td>4,729</td>
					<td>1,256</td>
					<td>26.6</td>
					<td>395</td>
					<td>8.4</td>
					<td>97</td>
					<td>2.1</td>
					<td>1,515</td>
					<td>32</td>
				</tr>
			</tbody>
		</table>
		<!-- Table 3 end--><br>
		<img src="images/altmetric/alt_2.png" alt="India Disipline wise" id="pic" style="width: 80%"><br>
		<p class="text-justify">
			It would be interesting to compare altmetric coverage of research output from India with world
			average levels of altmetric coverage. For the whole world, out of total 1,460,124 research papers
			found indexed in WoS with DOI, a total of 681,274 papers are found to be covered by altmetric.com,
			i.e. approximately 47% of the research output from the world is covered in some social media platform.
			<br>
			It can be observed that Mendeley has highest coverage of 43.5%, followed by Attention Score with 37.1%,
			Twitter with 34.4% and Facebook with 9.1%. Thus, it is quite evident that research output from India,
			in general, is getting lesser attention in Social media platforms as compared to world average levels.
		</p>
		<table class="table table-striped table-bordered table-sm">
			<caption>Discipline-wise Variations in Coverage in different platforms for Publications
				from World
			</caption>
			<thead class="table-dark">
				<tr>
					<th rowspan="2">Discipline</th>
					<th rowspan="2">Articles in WoS</th>
					<th colspan="2">Twitter</th>
					<th colspan="2">Facebook</th>
					<th colspan="2">New Mention</th>
					<th colspan="2">Mendeley</th>
				</tr>
				<tr>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
					<th scope="col"># of Articles</th>
					<th scope="col">Coverage Percentage</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>AGR</td>
					<td>53,749</td>
					<td>16,132</td>
					<td>30</td>
					<td>4,406</td>
					<td>8.2</td>
					<td>1,468</td>
					<td>2.7</td>
					<td>20,784</td>
					<td>38.7</td>
				</tr>
				<tr>
					<td>AH</td>
					<td>47,186</td>
					<td>8,690</td>
					<td>18.4</td>
					<td>2,025</td>
					<td>4.3</td>
					<td>350</td>
					<td>0.7</td>
					<td>10,763</td>
					<td>22.8</td>
				</tr>
				<tr>
					<td>BIO</td>
					<td>123,180</td>
					<td>67,281</td>
					<td>54.6</td>
					<td>16,850</td>
					<td>13.7</td>
					<td>9,006</td>
					<td>7.3</td>
					<td>76,480</td>
					<td>62.1</td>
				</tr>
				<tr>
					<td>CHE</td>
					<td>90,959</td>
					<td>24,733</td>
					<td>27.2</td>
					<td>4,673</td>
					<td>5.1</td>
					<td>2,332</td>
					<td>2.6</td>
					<td>31,331</td>
					<td>34.4</td>
				</tr>
				<tr>
					<td>ENG</td>
					<td>75,834</td>
					<td>5,663</td>
					<td>7.5</td>
					<td>1,067</td>
					<td>1.4</td>
					<td>355</td>
					<td>0.5</td>
					<td>14,128</td>
					<td>18.6</td>
				</tr>
				<tr>
					<td>ENV</td>
					<td>69,709</td>
					<td>22,196</td>
					<td>31.8</td>
					<td>4,722</td>
					<td>6.8</td>
					<td>2,219</td>
					<td>3.2</td>
					<td>28,961</td>
					<td>41.5</td>
				</tr>
				<tr>
					<td>GEO</td>
					<td>80,477</td>
					<td>26,873</td>
					<td>33.4</td>
					<td>5,445</td>
					<td>6.8</td>
					<td>3,599</td>
					<td>4.5</td>
					<td>35,902</td>
					<td>44.6</td>
				</tr>
				<tr>
					<td>INF</td>
					<td>46,438</td>
					<td>4,330</td>
					<td>9.3</td>
					<td>583</td>
					<td>1.3</td>
					<td>373</td>
					<td>0.8</td>
					<td>14,151</td>
					<td>30.5</td>
				</tr>
				<tr>
					<td>MAR</td>
					<td>94,117</td>
					<td>15,096</td>
					<td>16</td>
					<td>2,508</td>
					<td>2.7</td>
					<td>1,674</td>
					<td>1.8</td>
					<td>23,280</td>
					<td>24.7</td>
				</tr>
				<tr>
					<td>MAT</td>
					<td>49,385</td>
					<td>5,773</td>
					<td>11.7</td>
					<td>792</td>
					<td>1.6</td>
					<td>618</td>
					<td>1.3</td>
					<td>9,777</td>
					<td>19.8</td>
				</tr>
				<tr>
					<td>MED</td>
					<td><strong>441,032</strong></td>
					<td><strong>224,132</strong></td>
					<td>50.8</td>
					<td><strong>70,401</strong></td>
					<td>16</td>
					<td><strong>33,021</strong></td>
					<td>7.5</td>
					<td>
						<strong>264,405</strong></td>
					<td>60</td>
				</tr>
				<tr>
					<td>MUL</td>
					<td>69,445</td>
					<td>38,675</td>
					<td><strong>55.7</strong></td>
					<td>12,371</td>
					<td><strong>17.8</strong></td>
					<td>9,021</td>
					<td><strong>13</strong></td>
					<td>44,194</td>
					<td><strong>63.6</strong></td>
				</tr>
				<tr>
					<td>PHY</td>
					<td>201,373</td>
					<td>33,571</td>
					<td>16.7</td>
					<td>5,973</td>
					<td>3
					</td
					>
					<td>3,908</td>
					<td>1.9</td>
					<td>50,031</td>
					<td>24.8</td>
				</tr>
				<tr>
					<td>SS</td>
					<td>189,835</td>
					<td>78,799</td>
					<td>41.5</td>
					<td>24,557</td>
					<td>12.9</td>
					<td>9,258</td>
					<td>4.9</td>
					<td>96,180</td>
					<td>50.7</td>
				</tr>
			</tbody>
		</table>
		<!-- Table 4 end--><br>
		<img src="images/altmetric/alt_3.png" alt="World Discipline wise" id="pic" style="width: 80%"><br>
		<p class="text-justify">
			Thus, it is interesting to observe that there are similar disciplinary variations observed in
			coverage percentage values of different disciplines in research output from India and the world.
			MUL, BIO and MED disciplines are in general have more social media visibility and ENG, MAT and
			INF have relatively lesser social media visibility. Similarly, in both cases, Mendeley and Twitter
			have higher coverage percentage values and Facebook and News Mention have lower coverage percentage
			values. However, the coverage percentage values for research output from India is significantly
			lesser than coverage percentage values of the world data, across disciplines.
			<br>
			<img src="images/altmetric/alt_4.png" alt="World Discipline wise" id="pic" style="width: 50%">
			<br>
			The figure here shows the ratio of India’s altmetric coverage vis-à-vis World’s data for different
			disciplines for the four social platforms. The coverage ratio varies form approximately 2 to
			12% for different disciplines. Thus, we can conclude that not all disciplines attract similar
			amount of social media attention.
		</p>
		<table class="table table-striped table-bordered table-sm">
			<caption>Discipline-Wise Reading-Citation Patterns in ResearchGate</caption>
			<thead class="table-dark">
				<tr>
					<th>Discipline</th>
					<th>Articles in WOS</th>
					<th>Articles in RG</th>
					<th>Coverage Percentage (%)</th>
					<th>Reads Per Paper</th>
					<th>Papers With at least one Citation</th>
					<th>% of Cited Papers</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>AGR</td>
					<td>4,099</td>
					<td>3,081</td>
					<td>75.2</td>
					<td>61.59</td>
					<td>1,646</td>
					<td>53.4</td>
				</tr>
				<tr>
					<td>AH</td>
					<td>2,318</td>
					<td>1,580</td>
					<td>68.2</td>
					<td>61.54</td>
					<td>924</td>
					<td>58.5</td>
				</tr>
				<tr>
					<td>BIO</td>
					<td>8,626</td>
					<td>6,238</td>
					<td>72.3</td>
					<td>61.22</td>
					<td>3,647</td>
					<td>58.5</td>
				</tr>
				<tr>
					<td>CHE</td>
					<td>14,270</td>
					<td>8,960</td>
					<td>62.8</td>
					<td>59.54</td>
					<td>5,558</td>
					<td>62</td>
				</tr>
				<tr>
					<td>ENG</td>
					<td>9,694</td>
					<td>6,587</td>
					<td>67.9</td>
					<td>60.79</td>
					<td>3,955</td>
					<td>60</td>
				</tr>
				<tr>
					<td>ENV</td>
					<td>4,930</td>
					<td>3,393</td>
					<td>68.8</td>
					<td>71.09</td>
					<td>2,046</td>
					<td>60.3</td>
				</tr>
				<tr>
					<td>GEO</td>
					<td>4,105</td>
					<td>3,895</td>
					<td>94.9</td>
					<td>66.37</td>
					<td>2,292</td>
					<td>58.8</td>
				</tr>
				<tr>
					<td>INF</td>
					<td>3,890</td>
					<td>2,706</td>
					<td>69.6</td>
					<td>61.06</td>
					<td>1,558</td>
					<td>57.6</td>
				</tr>
				<tr>
					<td>MAR</td>
					<td>9,856</td>
					<td>6,687</td>
					<td>67.8</td>
					<td>44.19</td>
					<td>4,134</td>
					<td>61.8</td>
				</tr>
				<tr>
					<td>MAT</td>
					<td>2,641</td>
					<td>1,853</td>
					<td>70.2</td>
					<td>60.49</td>
					<td>1,021</td>
					<td>55.1</td>
				</tr>
				<tr>
					<td>MED</td>
					<td>22,676</td>
					<td>16,167</td>
					<td>71.3</td>
					<td>54.45</td>
					<td>7,734</td>
					<td>47.8</td>
				</tr>
				<tr>
					<td>MUL</td>
					<td>2,472</td>
					<td>1,982</td>
					<td>80.2</td>
					<td>65.26</td>
					<td>1,113</td>
					<td>56.2</td>
				</tr>
				<tr>
					<td>PHY</td>
					<td>14,255</td>
					<td>9,377</td>
					<td>65.8</td>
					<td>54.54</td>
					<td>5,660</td>
					<td>60.4</td>
				</tr>
				<tr>
					<td>SS</td>
					<td>4,729</td>
					<td>3,512</td>
					<td>74.3</td>
					<td>52.4</td>
					<td>1,773</td>
					<td>50.5</td>
				</tr>
			</tbody>
		</table>
		<!-- Table 5 end--><br>
		<p class="text-justify">
			From the table, it can be observed that coverage percentages for almost all disciplines in
			ResearchGate is higher as compared to other social media platforms seen earlier.Unlike other
			platforms, here GEO has highest coverage of 94.9% followed by MUL with 80.2%, AGR with 75.2%
			and SS with 74.3%.The table also shows data about reads and citations in ResearchGate for
			different disciplines.
		</p>
		<p class="text-justify">
			From the analysis, five different outcomes were produced :
		</p>
		<ul>
			<li>First, the overall social media coverage of research output from India is 28.5%, which is
				significantly lower than world average of 46.7%.
			</li>
			<li>Second, some disciplines like MED, BIO and MUL get more social media coverage as compared
				to their publication volume, whereas some other disciplines like ENG, INF and MAT get lesser
				social media coverage in comparison to their publication volume.
			</li>
			<li>Third, there exist disciplinary variations in social media coverage of research output from
				India, which is in general similar to the world-wide pattern, except just a few exceptions.
			</li>
			<li>Fourth, Mendeley and Twitter platforms have in general higher coverage of research output
				from India as well as world as compared to Facebook and News Mention. Interestingly, Facebook
				has largest number of users from India. Further, ResearchGate platform has significantly
				higher coverage for Indian data as compared to other platforms.
			</li>
			<li>Fifth, overall coverage and patterns of disciplinary variations in coverage in ResearchGate
				platform for research output from India is quite different from other platforms.
			</li>
		</ul>
	</div>
</div>
<?php include 'footer.php'; ?>
