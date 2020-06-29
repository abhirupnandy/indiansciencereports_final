<?php include 'header.php'; ?>
<div class="container-lg">
	<div class="text-center text-head py-2">
		<h1 class="h1">Open Access</h1>
	</div>
	<div class="text-body">
		<p class="text-justify">
			Open access refers to an important academic movement, emerged worldwide during the last decade,
			where publications are made available and accessible free of cost with minimum restrictions to
			different kinds of audience. It brings significant benefits to authors, readers, funders, institutions,
			etc., and more so for developing and under-developed countries where enough resources are not readily
			available with academicians to pay for article access charges.
		</p>
		<p class="text-justify">Open access has multiple forms –</p>
		<ul>
			<li><strong>Gold open access</strong>: Refers to articles published in journals which are
				completely free to be accessed by everyone
			</li>
			<li><strong>Green open access</strong>: Refer to articles published in journals behind
				paywalls, but the articles are also uploaded on some open repository (disciplinary or
				institutional). There may lie some restrictions on reuse of these articles.
			</li>
			<li><strong>Hybrid open access</strong>: Refers to articles published in closed journals
				and are made openly accessible by paying article processing charge by authors through
				some agreement with the journal.
			</li>
			<li><strong>Bronze open access</strong>: Refers to articles which are free to be read on
				the journal page but has reuse restrictions.
			</li>
			<li><strong>Black open access</strong>: Refers to articles shared on illegal pirate sites,
				such as Sci-Hub and LibGen. They are not well recognised as open access in literature.
			</li>
			<li><strong>Closed access</strong>: Refers to articles with no open access in legal forms.</li>
		</ul>
		<p class="text-justify">
			The Open Access initiative began in 1991 with Paul Ginsparg of Los Alamos National Laboratory (LANL)
			setting up <a href="https://arxiv.org/" id="p_link">arXiv</a>, and with invention of the World Wide Web, the
			movement kept on gaining momentum till date. Many research agencies are now making it
			mandatory for grant recipents to publish OA versions of theit research outcomes. Several
			disciplinary repositories like <a href="https://www.researchgate.net" id="p_link">ReseachGate</a> and
			<a href="https://www.academia.edu" id="p_link">Academia</a> have also emerged to allow authors
			to freely upload their articles.
		</p>
		<p class="text-justify">
			In India, the Open Access culture can be traced back in early 90s, with Indian physicists
			submitting their pre-prints in arXiv. The Vidyanidhi Digital Library from University of
			Mysore in 2002 is probably one of the first electronic thesis and dissertations initiative
			in India, thus beginning a repository culture. The Indian Institute of Science, Bangalore
			setup <a href="http://eprints.iisc.ernet.in/" id="p_link">EPrints@IISc</a> electronic repository
			in 2002. By early 2002, several Indian institutions and organizations have started taking
			initial steps towards open access of various scientific information. More recently in 2014,
			the Department of Biotechnology (DBT) and the Department of Science and Technology (DST)
			jointly work on a policy which stated
			<i>"since all funds disbursed by the DBT and DST are public funds, it is important
				that the information and knowledge generated through the use of these funds are
				made publicly available as soon as possible..."</i>. The Council of Scientific and
			Industrial Research (CSIR), a major institutional system of scientifc and idustrial research
			in the country, has issued an
			<a href="http://www.csircentral.net/mandate.pdf" id="p_link"> open access mandate</a>
			which requires all CSIR laboratories to setup their own interoperable institutional open access
			repositories. Through this mandate CSIR took initiative to
			<i>“lead the open access movement within the country”.</i>
			<br>
			The <a href="https://indiarxiv.org/" id="p_link">IndiaRxiv</a> of the Open Science project is
			the most recent addition to the open access cause. Open Access India has initially
			launched AgriXiv- a preprints repository for agriculture and allied sciences- and then
			launched IndiaRxiv. However, this preprints repository is yet to pick up momentum as there
			are only 67 preprints available as on 16th Feb. 2020, from the time of launch of the repository
			in April 2019.
		</p>
		<p class="text-justify">
			The core data for the study is the research publication data from India during the period
			of 2014 - 2018, obtained from <a href="https://www.webofknowledge.com" id="p_link">Web of Science</a>(WoS)
			index.
			Three main citations of WoS, namely Science Citation Index Expanded (SCIE), Social Science
			Citation Index (SSCI) and Arts and Humanities Citation Index (AHCI) were used. A total of
			377,336 records were collected, out of which 335,503 records had a DOI. Since DOI is
			taken as the appropriate identifier for this purpose, the rest of the records were dropped
			from the data-set.
			<br>
			In order to take note of all Open Access records out of th data-set, the Unpaywall REST API
			was used. For each publication record, the DOI was used to lookup information about the paper
			from Unpaywall. It was found that Unpaywall had information for 332,111 out of the 335,503 records.</p>
		<table class="table-striped table-bordered">
			<caption>Research Output from India indexed in WoS(2014-2018) that are legally OA</caption>
			<col style="width: 10%">
			<col style="width: 20%">
			<col style="width: 20%">
			<col style="width: 20%">
			<col style="width: 15%">
			<thead class="table-dark">
			<tr>
				<th>Publication Year</th>
				<th>No. of articles indexed in WoS</th>
				<th>No. of articles in WoS having a DOI</th>
				<th>No. of articles found on Unpaywall<sup>#</sup></th>
				<th>No. of articles that are OA<sup>#</sup></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>2014</td>
				<td>67675</td>
				<td>58310</td>
				<td>58308<br>(99.99%)</td>
				<td>13834<br>(23.72%)</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>70685</td>
				<td>61695</td>
				<td>60039<br>(97.32%)</td>
				<td>14347<br>(23.89%)</td>
			</tr>
			<tr>
				<td>2016</td>
				<td>76530</td>
				<td>67857</td>
				<td>67370<br>(99.28%)</td>
				<td>17280<br>(25.64%)</td>
			</tr>
			<tr>
				<td>2017</td>
				<td>78532</td>
				<td>70861</td>
				<td>69989<br>(98.77%)</td>
				<td>17014<br>(24.30%)</td>
			</tr>
			<tr>
				<td>2018</td>
				<td>84014</td>
				<td>76780</td>
				<td>76405<br>(99.51%)</td>
				<td>17856<br>(23.37%)</td>
			</tr>
			<tr style="font-weight: bolder">
				<td>Total</td>
				<td>377336</td>
				<td>335503</td>
				<td>332111<br>(98.99%)</td>
				<td>80331<br>(24.19%)</td>
			</tr>
			</tbody>
		</table>
		<div style="font-size: small;text-align: center"><sup>#</sup>
			Percentage is calculated w.r.t. number of articles in WoS having a DOI
			and found in Unpaywall, i.e. column 4
		</div>
		<!--Table 1 end-->
		<br>
		The graph below shows how much of the data published were actually made openly accessible throughout the years.
		<br><br>
		<img class="img-fluid" id="pic" src="images/open_access/percent_oa.png" alt="Open Access Data Percentage"
		     style="width: 60%">
		<br><br>
		<p class="text-justify"> The third step in data collection was to obtain relevant data
			from Sci-Hub for each of the Web of Science records being analyzed. This was done by writing
			an automated querying program which looked for availability of full-text of research paper.
			The automated lookup in Sci-Hub platform was made for 67,857 publication records with DOI for
			the publication year 2016.</p>
		<table class="table-bordered table-striped">
			<caption>Articles in WoS from India that are on Sci-Hub</caption>
			<col style="width: 15%">
			<col style="width: 15%">
			<col style="width: 20%">
			<col style="width: 20%">
			<thead class="table-dark">
			<tr>
				<th>No. of artcicles in WoS (PY=2016)</th>
				<th>Articles in DOI</th>
				<th>No. of articles that are on Sci-Hub</th>
				<th>Sci-Hub articles as Percentage of total articles<sup>1</sup></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>76530</td>
				<td>67857</td>
				<td>61706</td>
				<td>90.93</td>
			</tr>
			</tbody>
		</table>
		<div style="font-size: small;text-align: center"><sup>1</sup>
			Percentage is calculated w.r.t. number of articles in WoS having a DOI,
			i.e. column 2
		</div>
		<!--Table 2 end-->
		<br>
		The number of Indian Papers downloaded from Sci-hub in 2016 is shown below
		<br><br>
		<img class="img-fluid" id="pic" src="images/open_access/scihub.png" alt="Sci-Hub download data for 2017"
		     style="width: 50%">
		<br>
		<p class="text-justify">
			The fourth part of data collection was to obtain the statistics for volume of research
			output accessible through the major Indian Institutional Repositories (IRs).Counts for
			the three main central IRs, namely <i>sciencecentral</i>, <i>csircentral</i> and <i>krishikosh</i>
			were obtained. The numbers were analyzed in the context of publication records from India
			indexed in Web of Science.</p>
		<table class="table-striped table-bordered">
			<caption>Status of the three central institutional repositories in India</caption>
			<col style="width: 7%">
			<col style="width: 20%">
			<col style="width: 15%">
			<col style="width: 15%">
			<col style="width: 20%">
			<thead class="table-dark">
			<tr>
				<th>S.no.</th>
				<th>Name of Central Repository</th>
				<th>No. of connected IRs</th>
				<th>Period of records</th>
				<th>Total Records</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>DST-DBT Central Repository<br>(sciencecentral.in)</td>
				<td>24</td>
				<td>1920-2019</td>
				<td>125595</td>
			</tr>
			<tr>
				<td>2</td>
				<td>CSIR Institutional Repository<br>(csircentral.net)</td>
				<td>30</td>
				<td>2006-2019</td>
				<td>100609</td>
			</tr>
			<tr>
				<td>3</td>
				<td>ICAR Central Repository<br>(Krishikosh)</td>
				<td>104</td>
				<td>NA</td>
				<td>18486</td>
			</tr>
			</tbody>
		</table>
		<!-- Table 3 end-->
		<br>
		<p class="text-justify">
			Since the paper aimed at characterizing open access levels in different disciplines, each
			publication record was tagged into one of the 14 broad research disciplines. The WoS Category
			(WC) field was used for tagging each publication into disciplinary categories. These 14 broad
			research disciplines in which articles were tagged are:</p>
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
		The table below shows the results of the analysis.
		<table class="table-bordered table-striped">
			<caption>Discipline-wise Distribution of articles that are Gold-Green OA or
				or available in Sci-Hub
			</caption>
			<thead class="table-dark">
			<tr>
				<th rowspan="2">Discipline</th>
				<th rowspan="2">No. of articles in WoS(PY=2016)</th>
				<th rowspan="2">No. of articles with DOI</th>
				<th colspan="2">Articles that are available as gold and green OA</th>
				<th colspan="2">Articles that are available in Sci-Hub</th>
			</tr>
			<tr>
				<th scope="col">No. of articles that are OA</th>
				<th scope="col">Percentage</th>
				<th scope="col">No. of articles that are in Sci-Hub</th>
				<th scope="col">Percentage of articles available in Sci-Hub<sup>1</sup></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>MED</td>
				<td>15307</td>
				<td>11884</td>
				<td>6118</td>
				<td>51.48%</td>
				<td>9422</td>
				<td>79.28%</td>
			</tr>
			<tr>
				<td>CHE</td>
				<td>14092</td>
				<td>13496</td>
				<td>1337</td>
				<td>9.90%</td>
				<td>13092</td>
				<td>97.01%</td>
			</tr>
			<tr>
				<td>PHY</td>
				<td>7838</td>
				<td>7598</td>
				<td>3411</td>
				<td>44.89%</td>
				<td>7286</td>
				<td>95.89%</td>
			</tr>
			<tr>
				<td>BIO</td>
				<td>7094</td>
				<td>6394</td>
				<td>2525</td>
				<td>39.49%</td>
				<td>5871</td>
				<td>91.82%</td>
			</tr>
			<tr>
				<td>ENG</td>
				<td>6708</td>
				<td>6389</td>
				<td>957</td>
				<td>14.97%</td>
				<td>6120</td>
				<td>95.79%</td>
			</tr>
			<tr>
				<td>MAR</td>
				<td>5818</td>
				<td>5562</td>
				<td>1110</td>
				<td>19.95%</td>
				<td>5356</td>
				<td>96.3%</td>
			</tr>
			<tr>
				<td>AGR</td>
				<td>4582</td>
				<td>3516</td>
				<td>1245</td>
				<td>35.40%</td>
				<td>2803</td>
				<td>79.72%</td>
			</tr>
			<tr>
				<td>GEO</td>
				<td>3912</td>
				<td>3038</td>
				<td>916</td>
				<td>30.15%</td>
				<td>2628</td>
				<td>86.5%</td>
			</tr>
			<tr>
				<td>ENV</td>
				<td>3563</td>
				<td>3164</td>
				<td>1095</td>
				<td>34.61%</td>
				<td>2869</td>
				<td>90.68%</td>
			</tr>
			<tr>
				<td>INF</td>
				<td>2857</td>
				<td>2728</td>
				<td>515</td>
				<td>18.87%</td>
				<td>2593</td>
				<td>95.05%</td>
			</tr>
			<tr>
				<td>MUL</td>
				<td>2754</td>
				<td>2351</td>
				<td>1945</td>
				<td>82.73%</td>
				<td>1853</td>
				<td>78.82%</td>
			</tr>
			<tr>
				<td>SS</td>
				<td>1759</td>
				<td>1478</td>
				<td>493</td>
				<td>33.36%</td>
				<td>1424</td>
				<td>96.35%</td>
			</tr>
			<tr>
				<td>MAT</td>
				<td>1648</td>
				<td>1487</td>
				<td>582</td>
				<td>39.14%</td>
				<td>1240</td>
				<td>83.39%</td>
			</tr>
			<tr>
				<td>AH</td>
				<td>184</td>
				<td>98</td>
				<td>17</td>
				<td>17.35%</td>
				<td>89</td>
				<td>90.82%</td>
			</tr>
			</tbody>
		</table>
		<!--Table 4 end--><br>
		
		<p class="text-justify"> Upon analysis, it was found that 24% of the Indian articles published during the last 5
			years are
			available as open access. This is about 6% lower than the global average. Gold OA is found to be more
			prevalent than Green OA. However, these two together amounts to 1/3 <sup>rd</sup> of all the research
			papers in India. Contrarily, Sci-Hub provides access to more than 90% of the research papers from
			India, as seen from 2016 data. This is a clear implication that traditional and legal open access models
			have failed to truly deliver open access to research articles.
			<br>
			Secondly, the results show that a very low volume of research output from India is getting deposited
			in Institutional Repositories. Estimates show that this is less than 15% of the research output
			produced from India, implying that India has somehow failed to tap the potential of Institutional
			repositories for providing open access to its research output. It appears that open access initiatives
			should not be limited to mandates by research funding agencies, rather much more needs to be done for
			promoting open access through Institutional Repositories.
			<br>
			Also, the discipline-wise analysis shows that there exist disciplinary variations in levels of open
			access. While, disciplines like Multidisciplinary, Medical Science and Physics have higher proportion
			of articles available in gold & green OA, they are not best covered in Sci-Hub. On the other hand,
			disciplines like Chemistry, Information Science and Arts & Humanities that have less percentage of
			research papers available as gold & green OA have very high coverage in Sci-Hub with more than
			90% papers available for free download. It appears that Sci-Hub is in a sense complementing the gold
			& green OA models, with preferential coverage of disciplines that are not well-covered through
			legal gold & green OA models.
			<br>
			Lastly, we also see how the amount of papers accessible through legal gold & green OA models is
			significantly much lesser as compared to black OA. One of the main reasons could be the fact that
			Indian researchers are not really taking the open access calls seriously. Further, Indian institutional
			system seems to have lack of funds to enter into open access agreements with different journals and
			publishing houses to make research papers openly accessible. Another important point to note is the
			high volume of papers available in Sci-Hub as well as number and geographies of downloads.
			The image below shows a geographical distribution of download activity for Indian Papers in Sci-Hub.
			<br><br></p>
		<img class="img-fluid" id="pic" src="images/open_access/world_dist.png"
		     alt="Geographic Distribution of Indian research Download"
		     style="width: 60%">
		<p class="text-justify">
			Further, researchers downloading papers from Sci-Hub seem totally unconcerned with legal issues
			associated with Sci-Hub’s model. This observation has at least one very clear implication that
			the access models and platforms have to be simplified and made easy to use.</p>
		<p class="text-justify">
			Since disciplinary repositories being preferred sources for authors, it would be interesting to analyze
			as to what amount of research output for different disciplines from India is available in OA
			through relevant disciplinary repositories. ALso, websites like ResearchGate, although having a good
			amount of research papers available, does not have proper API or due to restrictions, cannot facilitate
			automated crawling for data collection or analysis. This leads to a loss of information within our
			analysis reports.
		</p>
	</div>
</div>
<?php include 'footer.php'; ?>
