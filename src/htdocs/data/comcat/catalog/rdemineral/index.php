<?php
include '../_catalog.inc.php';
?>

<h2 id="description">Description</h2>
<p>
	This catalog of earthquake source parameters was derived by the USGS
  National Earthquake Information Center (NEIC) as part of a relocation
  study of the Mw 5.8 Mineral, Virginia earthquake of August 23, 2011
  and its aftershocks using a calibrated multiple event relocation method
  (McNamara et al., 2014). The purpose of this relocation analysis is to
  produce a set of reference hypocenters (with associated phase arrival times
  and empirical reading errors) for this source region that are especially 
  well constrained, subject to minimal bias from unknown velocity 
  structure and having  realistic estimates of uncertainty based on the 
  measured statistical properties of the data set.
</p>


<h2 id="method">Method</h2>
<p>
	Refined estimates of the epicenters, focal depths and origin times of
	earthquakes in the Mineral sequence were estimated using a method based
	on the Hypocentroidal Decomposition (HD) algorithm introduced by Jordan
	and Sverdrup (1981), but extensively developed for application in
	calibrated relocation studies, i.e., relocation studies that are
	specialized to provide minimally biased estimates of hypocentral
	parameters and realistic estimates of their uncertainties. The program 
	MLOC implements this method, which is described here.
</p>

<h2 id="data">Data</h2>
<p>
	The data set of seismic phase arrival times used in this analysis includes
  picks from temporary seismograph stations that were installed by several
  research groups around the epicentral area; these picks were made by NEIC
  staff. Phase arrival times from permanent seismic stations from the ComCat
  (https://earthquake.usgs.gov/earthquakes/map/) and the bulletin of the
  International Seismological Centre (ISC) were also used. Arrival time
  picks from the ISC were not reviewed, but all arrival time data was subject
  to evaluation for outlier readings using empirically-derived estimates of
  reading error, as described in the relocation methodology, above.
</p>

<h2 id="velocity-model">Velocity Model</h2>
<p>
	The global 1-D travel time model ak135 (Kennett et al., 1995) fits the
  Mineral data well at local and near-regional distances, but the predicted
  travel times of direct crustal phases (Pg, Sg) in the distance range 40-60 km
  are a little late. Travel times for teleseismic phases were calculated with
  ak135 but for local and regional phases we calculated theoretical travel times
  with a model very similar to ak135 but with slightly higher velocities in the
  crust.
</p>

<table>
  <thead>
    <tr>
      <th>Depth (km)</th>
      <th>Vp (km/s)</th>
      <th>Vs (km/s)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0-20</td>
      <td>5.95</td>
      <td>3.60</td>
    </tr>
    <tr>
      <td>20-37</td>
      <td>6.45</td>
      <td>3.85</td>
    </tr>
    <tr>
      <td>>37</td>
      <td>8.10</td>
      <td>4.5</td>
    </tr>
  </tbody>
</table>

<p>
	The HD algorithm used for the relocation analysis is limited in
  the number of events that can be relocated simultaneously by rapidly
  increasing computational time.  The practical limit is ~200 events,
  about half the number of events in the Mineral sequence that were
  recorded well enough to be relocated with high accuracy. We therefore
  divided the sequence chronologically into three subclusters, which were
  relocated independently. Calibration of the Mineral subclusters was
  accomplished through the method of direct calibration, in which the
  hypocentroid, which establishes  the location of the cluster in absolute 
  terms, is estimated from arrival time  readings at short epicentral 
  distances to minimize the biasing effect of unknown velocity structure. 
  For the Mineral subclusters the distance limit for data used to 
  estimate the hypocentroid was 0.6°. Basic parameters for the three 
  subclusters, including the number of P and S readings used to estimate 
  the four hypocentral parameters of the hypocentroid are given in the table.
</p>

<table>
  <thead>
    <tr>
    	<th> </th>
      <th># Events</th>
      <th>Mag Range</th>
      <th>Dates (2013)</th>
      <th># Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>minerala</td>
      <td>135</td>
      <td>5.8-0.1</td>
      <td>2013/8/23 - 2013/9/5</td>
      <td>2610</td>
    </tr>
    <tr>
      <td>mineralb</td>
      <td>148</td>
      <td>3.0-0.2</td>
      <td>2013/9/5 - 2013/10/31</td>
      <td>3357</td>
    </tr>
    <tr>
      <td>mineralc</td>
      <td>114</td>
      <td>3.8-1.8</td>
      <td>2013/11/2 - 2012/5/2</td>
      <td>2085</td>
    </tr>
  </tbody>
</table>


<h2 id="calibrated-relocation-of-the-mineral-cluster">Calibrated Relocation of the Mineral Cluster</h2>
<p>
	The HD algorithm used for the relocation analysis is limited in the
  number of events that can be relocated simultaneously by rapidly increasing
  computational time. The practical limit is ~200 events, about half the number
  of events in the Mineral sequence that were recorded well enough to be 
  relocated with high accuracy. We therefore divided the sequence 
  chronologically into three subclusters, 
  which  were relocated independently. Calibration 
  of the Mineral subclusters was accomplished through the method of direct 
  calibration, in which the hypocentroid, which establishes the location 
  of the cluster in absolute terms, is estimated from arrival time readings
  at short epicentral distances to minimize the biasing effect of unknown 
  velocity structure. For the Mineral subclusters the distance limit for 
  data used to estimate the hypocentroid was 0.6°. Basic parameters for 
  the three subclusters, including the number of P and S readings
  used to estimate the four hypocentral parameters of the hypocentroid are given
  in the table.
</p>

<table>
  <thead>
    <tr>
    	<th> </th>
      <th># Events</th>
      <th>Mag Range</th>
      <th>Dates (2013)</th>
      <th># Data</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>minerala</td>
      <td>135</td>
      <td>5.8-0.1</td>
      <td>2013/8/23 - 2013/9/5</td>
      <td>2610</td>
    </tr>
    <tr>
      <td>mineralb</td>
      <td>148</td>
      <td>3.0-0.2</td>
      <td>2013/9/5 - 2013/10/31</td>
      <td>3357</td>
    </tr>
    <tr>
      <td>mineralc</td>
      <td>114</td>
      <td>3.8-1.8</td>
      <td>2013/11/2 - 2012/5/2</td>
      <td>2085</td>
    </tr>
  </tbody>
</table>

<p>
	Estimates of relative locations (cluster vectors) in each subcluster
  were determined from arrival time data of stations at less than 10°
  epicentral distance. Only a few events in the cluster have significant
  amounts of data at greater distance, and we found that using those data
  introduced bias in the location of the mainshock epicenter, shifting it 1-2 km
  to the west, away from the aftershock pattern. The number of readings used
  to estimate the cluster vectors in each subcluster is slightly larger than
  the number of data used to estimate the hypocentroid.
</p>

<p>
	The hypocentroid of each subcluster was estimated with readings out to an
  epicentral  distance of 0.6°, to minimize the biasing effect of unmodeled
  crustal velocity variations. The calibration level of the hypocentroids 
  of the subclusters is 0.1-0.2 km. The full uncertainty for hypocentral 
  parameters for any given event is obtained by adding the uncertainty of the
  cluster vector for that event to the  uncertainty of the appropriate 
  hypocentroid. The full epicentral uncertainty, characterized by the 
  longer semi-axis of the 90% confidence ellipse, is less than 1.5 km
  for 393 events out of 397 that were relocated.
</p>

<p>
	Focal depths for all events were estimated during early runs with
  free depth solutions then held fixed in later relocations. Depths range
  from 0-11 km with a major peak between 5-7 km and a lesser one around 3 km,
  and with uncertainties of 0.3 to 3.8 km (median uncertainty 0.6 km).
</p>

<p>
	Because the focal depths and origin times of the Mineral
  subclusters are considered to be calibrated in addition to the epicenters,
  the calibration class is “CH” and 393 events are classified as CH01 or better.
</p>

<h2 id="empirical-reading-error">Empirical Reading Error</h2>
<p>
	The concept of "reading error" in earthquake location is normally
  understood as an estimate of the uncertainty of the reading of the
  arrival time ("pick") of a specific seismic phase on the seismogram
  of a specific earthquake. Seismic analysts rarely provide their own estimate
  of that uncertainty beyond a qualitative characterization as "emergent" or
  "impulsive", and earthquake location codes that employ a quantitative
  estimate of reading error, e.g., for inverse weighting, normally use an
  ad hoc value based on phase type. It is very important to realize that
  estimates of hypocenter uncertainty in any earthquake location algorithm 
  depend on the accuracy of the uncertainties assumed for the data, as well as
  the proper treatment of other sources of uncertainty in the estimation 
  process. This is a significant weakness of most earthquake location 
  analyses.
</p>

<p>
	“Empirical reading error” is a related concept, based on multiple event
  relocation, i.e., location analysis of a clustered group of earthquakes.
  The specific implementation discussed here is the one developed for use
  in the program mloc that is based on the Hypocentroidal Decomposition (HD)
  algorithm of Jordan and Sverdrup (1981). Seismic stations often observe the
  same seismic phase for multiple events in such a cluster. The resulting
  multiple observations of the same "station-phase" provide an opportunity to
  carry out a statistical analysis which leads to an estimate of the uncertainty
  of those readings that is based on the readings themselves, thus "empirical".
  It would be more correct to refer to this as an 
  "empirical reading uncertainty" or even “empirical reading consistency”, 
  but we follow the traditional seismological terminology. 
  It is also important to note that this concept of
  empirical reading error includes contributions to the scatter of readings 
  beyond reading error per se, i.e.,  the ability of the analyst to specify 
  the “correct” time of onset time of a seismic phase arrival. For example 
  it also absorbs differences in travel time to a station through
  a heterogeneous Earth from events that are not exactly co-located, as well
  as scatter arising from the different philosophies of arrival time picking
  used by different analysts, differences caused by picking from different
  channels or instrument responses, changes in station equipment, minor changes
  in instrument location, irregularities in timing systems, differences in the
  precision to which picks are reported, etc..
</p>

<p>
	Empirical reading errors are estimated as the spread of the distribution of
  travel time residuals for a given station-phase (for example, the Pn phase
  at station TUC) for a specific cluster of earthquakes whose differences in
  location are typically, but not necessarily, small compared to the separation
  of the cluster and the station. The number of samples can range from two to
  several hundred. The analysis is done on the set of residuals obtained by
  subtracting a theoretical arrival time, based on some travel time model and
  the current hypocenter of the event, from each arrival time observation. Thus
  each arrival time reading of a given station-phase is assigned the same
  empirical reading error. Although this obviously falls short of the ideal
  of having a reliable estimate of the uncertainty of each reading, it is a
  significant improvement over the traditional methods for handling uncertainties
  in arrival time data. Because the arrival time readings are weighted inversely
  to their empirical reading errors in the location algorithm, the specification
  of reading errors has a major impact on the estimated hypocenters and
  their uncertainties.
</p>

<p>
	The estimate of spread of the residuals must be done with a robust estimator,
  i.e., one that is not sensitive to outliers, which are very common in arrival
  time data sets. The familiar statistic standard deviation is a very non-robust
  measure of spread. We employ the estimator Sn proposed by Croux and
  Rousseeuw (1992). Note that this has nothing to do with the seismic phase
  Sn. This measure of scale or spread has three desirable properties, 1) it
  requires no assumptions about the nature of the underlying distribution,
  2) it requires no estimate of the central tendency (e.g., the mean or median)
  of the distribution, and 3) it reduces to  the standard deviation if applied
  to a Gaussian  distribution.
</p>

<p>
	An important aspect of the relocation process consists of multiple cycles
  in which the current estimates of empirical reading error are used to
  identify outlier readings, which are then flagged so that they will not be used
  in subsequent relocations. In the following relocation, the new estimates of
  empirical reading errors will tend to be smaller because of the filtering of 
  outliers and improvement in the locations of the clustered events. Therefore
  the process of identifying outliers is iterative and it must be repeated
  until convergence. In this context, "convergence" means that the distribution
  of residuals for a given station-phase is consistent with the current
  estimate of spread. As outlier readings are flagged, the distribution is
  expected to evolve toward a normal distribution with standard deviation σ
  equal to the empirical reading error. We generally continue this "cleaning"
  process until all readings used in the relocation are within 3σ of the mean
  for that station-phase, where σ is the current estimate of empirical reading
  error for the relevant station-phase. The procedures used to construct
  confidence ellipses and other estimates of hypocentral parameter
  uncertainty in mloc (and most other location algorithms) are based on
  the assumption that the residuals have a normal distribution.  
  In the presence of outlier readings, the resulting uncertainty estimates
  will be biased.
</p>

<p>
	Because of inverse weighting in the HD algorithm, it is necessary
  to impose minimum allowed values for empirical reading errors to
  prevent unrealistically small estimates from arising when the sample
  size is small and values are very near one another, or identical. We
  normally use 0.15 s as a minimum which is generally appropriate for the
  data sets obtained from standard earthquake catalogs, but smaller values
  can be permitted in special circumstances. For singlet station-phase 
  arrival time data (only one observation) default values that are typical 
  of many earthquake location algorithms (e.g., 0.5 s for teleseismic P) 
  are applied.  Singlet readings make no contribution to the  estimate of 
  relative locations in the HD algorithm, but they can be used to estimate 
  the hypocentroid, in which case the reasonableness of the default value of 
  empirical reading error must be evaluated for the particular data set
  in order to have confidence in the derived hypocentral parameter 
  uncertainties.
</p>

<p>
	In summary, the use of empirical reading errors in mloc allows us to treat
  the derived hypocentral uncertainties with considerable confidence. Although
  any multiple event relocation method could implement a similar analysis, we
  are not aware of any that do. Single event location methods are inherently
  handicapped by the lack of any way to investigate data uncertainty in a
  statistically robust way, although careful attention to the arrival time
  picking process can partially compensate. Failure to adequately characterize
  data uncertainties in the hypocenter estimation process leads to bias in the
  derived parameters and their uncertainties.
</p>

<h2 id="earthquake-location-accuracy">Earthquake Location Accuracy</h2>
<p>
	Here we provide a description of a system of codes used to characterize the
  accuracy of earthquake locations determined with mloc, a multiple event
  relocation program based on the Hypocentroidal Decomposition algorithm of
  Jordan and Sverdrup (1981), but extensively developed for application in
  calibrated relocation studies, i.e., relocation studies that are specialized
  to provide minimally biased estimates of hypocentral parameters and realistic
  estimates of their uncertainties.
</p>

<p>
	The classification system described here is an extension of the well-known
  “GTX” system (e.g., Bondar et al., 2004). The primary extension is to 
  generalize the single “class” of the GTX system to four classes that 
  allow an accuracy code to be assigned to any hypocenter. 
  A great advantage of this extra complexity is the ability to distinguish
  between the different ways in which constraints on location accuracy
  may have been derived. Moreover we extend the GTX system to carry 
  information about the accuracy of the hypocentral parameters focal depth and 
  origin time, rather than the epicenter alone. This new classification
  system takes its name “GCNU” from the first letters of the names of the four 
 classes:
</p>

<ul>
  <li>G: ground truth</li>
  <li>C: calibrated</li>
  <li>N: network geometry criteria</li>
  <li>U: uncalibrated</li>
</ul>

<p>
	The general form of a location accuracy code in the GCNU system is four
  characters, of which the first is one of the letters indicating
  accuracy class, as listed above. The second character carries information
  on which hypocentral parameters can be considered calibrated. The third
  and fourth characters are numeric and together provide a length scale in
  km for the accuracy of the epicenter (equivalent to the “X” term in the
  GTX system. There are several exceptions to these general rules, as noted
  below.
</p>

<h2 id="ground-truth-the-g-class">Ground Truth: the G Class</h2>
<p>
	This class has only two instances, both of which have only three
  characters. The GT0 nomenclature is reserved for traditional (or literal)
  ground truth, events for which all four hypocenter coordinates are known
  a priori at levels of accuracy which are negligible for the purpose at hand.
  For epicenter and focal depth these uncertainties are typically less than
  about a hundred meters. At a typical crustal P velocity of 6 km/s 100 meters
  represents 0.015 s, so origin time should be known to several hundredths of a
  second in order to be compatible. These limits may not be suitable for 
  some engineering purposes or specialized source studies. The designation
  “ground truth” has traditionally been reserved for nuclear tests and
  carefully engineered chemical explosions. It is possible to obtain 
  this level of accuracy with natural seismic sources that are especially 
  heavily instrumented at close range but it is still preferable to use
  the C class in such cases.
</p>

<p>
	There is a need for a somewhat relaxed ground truth category, because even
  though the hypocentral parameters of a man-made explosion may be given 
  a priori, the uncertainties may not meet the stricter requirements given 
  above. This may be the case because of inadequate record keeping or the 
  difficulty in carrying out suitably accurate surveying or timing prior 
  to the availability of GPS technology. 
  The GT1 category is meant for such cases. This still implies
  near-certain knowledge of location within a kilometer or so, with
  comparable uncertainty in origin time (several tenths of a second). Industrial
  explosions and even some nuclear tests may not meet this standard. Such events
  ought to be treated in the calibrated (C) class of events, as discussed below,
  rather than being assigned ground truth status with inflated scale lengths.
</p>

<p>
	No length scale greater than 1 should be used in this class. If the
  uncertainty is greater than that it is not ground truth.
</p>

<h2 id="ground-truth-the-C-class">Ground Truth: the C Class</h2>
<p>
	In contrast to the ground truth class, where the concern is primarily 
  with the scale of random error in the hypocentral parameters, the class
  of calibrated events is dominated by concern that the estimation process
  which has been used to determine hypocentral parameters may have introduced
  significant bias. Therefore we are very much concerned about minimizing bias
  and understanding which hypocentral parameters may be treated as effectively
  bias-free. Obviously we also desire to estimate the hypocentral parameters
  such that the formal uncertainties (driven by uncertainty in the data),
  usually expressed in Gaussian terms, are as small as possible; this will be
  handled similarly to the “X” in the GTX formulation, discussed below in the
  section “Scale Length”.
</p>

<p>
	A very important point about the calibrated class of events, is that it
  includes only events for which the epicenter (at least) has been determined
  in such a way as to minimize bias. Although a bit unsatisfying in a logical
  sense, this policy reflects the reality that the seismological community
  overwhelmingly thinks of ground truth or GT events (using the popular
  current nomenclature) as referring only to the epicenter. The other 
  important point to be made is that this class requires an actual location
  analysis, not just the application of some set of network geometry
  criteria such as those presented by Bondar et al. (2004).
  In other words, application of network geometry criteria to estimate location
  accuracy may be a precursor to calibration analysis, but is not a
  substitute for it.
</p>

<p>
	Given that we do not know the Earth’s velocity structure to sufficient
  accuracy, the only way to reduce bias for an event that was not engineered
  is to keep path lengths through the unknown Earth structure as short as
  possible. In other words only near-source data should be employed for
  estimating calibrated parameters. “Near source data” is not restricted to
  seismological stations at short epicentral distance, although that is by far
  the most common case. Mapped surface faulting, treated with all due
  geological sensitivity, may serve as near source data for the purpose
  of constraining an epicenter, as may InSAR or other types of remote
  sensing analyses, since the ultimate signal (e.g., surface deformation)
  is not subject to bias from unknown Earth structure.
  InSAR analysis, through determination of the distribution of rupture
  on a fault plane, may be used to reduce bias in focal depth. Waveform
  modeling (even at regional or teleseismic distances) may similarly provide
  useful near-source constraint on focal depth through analysis of the
  interference of direct and near-source surface-reflected phases.
</p>

<p>
	Unfortunately, there is no methodology for obtaining usefully-calibrated
  hypocenters for deep earthquakes because every available data type must
  propagate through an excessive volume of material with insufficiently
  well-known velocity. The exact definition of “deep” in this context must
  be evaluated on a case-by-case basis, but it probably includes any event
  deeper than about 100 km. If uncertainties in velocity structure
  (and their effect on raypath geometry) are honestly propagated into the
  uncertainties of the derived location parameters, then the issue will be
  resolved by the increasing uncertainty of the location, leaving aside the
  question of bias.
</p>

<p>
	The nomenclature for the calibrated class is based on the following
  practical considerations about the calibration of the various hypocentral
  parameters:
</p>

<h2 id="epicenter">Epicenter</h2>
<p>
	Bias in epicentral coordinates can be minimized by means of seismological
  analysis (typically a location analysis), as well as by other means, including
  geological and remote-sensing analyses and a priori knowledge of
  human-engineered sources that may be too weak for ground truth status.
  It is quite common for the epicenter to be the only hypocentral parameter
  of an event that can be usefully constrained with minimal bias.
</p>

<h2 id="depth">Depth</h2>
<p>
	Focal depth is more difficult to constrain than the epicentral coordinates.
  In the location analysis, it requires data at epicentral distances comparable
  to the focal depth itself, a few tens of kilometers for crustal events, a 
  much stricter requirement than for the epicenter, which can be usefully
  constrained with stations 100 km or so away. This distance requirement
  can be ignored for waveform modeling, however, as well as for analyses of
  teleseismic depth phases, most famously emphasized by the EHB algorithm
  (Engdahl et al., 1998).
  Therefore the minimization of bias in focal depth can be part of the general
  location analysis, coupled with the estimate of a minimally-biased epicenter,
  or it can be constrained independently, even when the epicenter may be
  uncalibrated.
</p>

<h2 id="origin-time">Origin Time</h2>
<p>
	Calibration of origin time is only fully possible when both the epicenter and
  focal depth can be calibrated. Unless it has been specified a priori for a
  human-engineered event it must be estimated from seismic arrival time data
  at the shortest possible epicentral distances, and any bias in the location
  parameters would propagate into origin time. It is quite common, however,
  to encounter case where the epicenter and origin time of an event can be
  constrained with near-source data (not necessarily for the event in question
  but through linkage to other events in a multiple event analysis),
  but the focal depth of the event cannot be usefully constrained,
  other than as an average depth for a cluster of events, some of which
  have well-constrained depths, or through regional seismotectonic
  considerations. In this case the origin time itself cannot be considered
  to be unbiased, but since it is reliably coupled to the assumed focal
  depth, the combined hypocentral coordinates can still provide valuable
  information on empirical travel times from a specific point in the Earth.
</p>

<p>
	Given the above considerations there are three cases that need to be
	distinguished in the calibrated class of the nomenclature. In the
	following table, the asterisk indicates parameters that have been
	calibrated in some manner: 
</p>

<table>
  <thead>
    <tr>
      <th> </th>
      <th>Epicenter</th>
      <th>Focal Depth</th>
      <th>Origin Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>CH</td>
      <td>*</td>
      <td>*</td>
      <td>*</td>
    </tr>
    <tr>
      <td>CT</td>
      <td>*</td>
      <td> </td>
      <td>*</td>
    </tr>
    <tr>
      <td>CF</td>
      <td>*</td>
      <td>*</td>
      <td> </td>
    </tr>
    <tr>
      <td>CE</td>
      <td>*</td>
      <td> </td>
      <td> </td>
    </tr>
  </tbody>
</table>

<p>
	CH (“H” refers to hypocenter). All four hypocentral coordinates
	have either been inferred by means that yield minimally-biased estimates
	or constrained a priori (as in some human-engineered events that don’t
	quite qualify for GT1 status or better).
</p>

<p>
	CT (“T” refers to travel time). Epicenter has been calibrated;
	depth has been fixed at some assumed value (e.g., the average depth
	of nearby events with constrained depths);
	the estimate of origin time is based on local-distance data, but
	relative to an uncalibrated depth. Neither the focal depth not origin
  time can be considered calibrated in themselves but the combination can
  be used to estimate empirical travel times from the specific point
  in the Earth. Such events are not quite as valuable as CH events but still
  have considerable value as input to model-building exercises or as
  validation events.
</p>

<p>
	CF (“F” refers to focal depth). Epicenter and focal depth have been
  calibrated, but not origin time. An example could be an inSAR location for an
  event and depth calibrated either by an additional analysis of surface
  deformation to infer distributed displacement on a fault surface, or through
  waveform analysis. The estimate of origin time is not based on near-source 
  readings. These events can be used in validation exercises where their
  epicenters are compared with locations done with ray-traced travel-times
  through a model.
</p>

<p>
	CE (“E” refers to epicenter). The epicenter is calibrated. As with the
  CT class, depth has been fixed at some assumed (albeit reasonable) value.
  If the calibration of the epicenter has not been based on near-source seismic
  data (e.g., an InSAR location), the estimate of origin time must be based on
  regional or teleseismic arrivals and therefore cannot be considered 
  calibrated, nor can it be used for estimate of empirical travel times. 
  These events can be used in validation exercises where their epicenters
  are compared with locations done with ray-traced travel-times through
  a model.
</p>

<h2 id="network-geometry-criteria-the-n-class">Network Geometry Criteria:
The N Class</h2>
<p>
	Events in the N class are not considered to be calibrated in the sense
  defined here, but the arrival time data set has been processed with some
  network criteria (e.g., Bondar et al. (2004), but others are developing
  similar criteria for different source regions) based on simple metrics such
  as number of readings and distribution of reporting stations, in order to
  provide an estimate of epicentral accuracy that is expected to account for
  systematic location bias. The assumption here is that 1) the data do not
  permit a calibration analysis because there are insufficient near-source
  data, or 2) that such an analysis has simply not yet been done
  (i.e., a bulletin has simply been scanned for candidate calibration events).
  If a careful relocation analysis has been done to standards that can
  arguably justify classification as a calibrated event, the C class
  should be used.
</p>

<p>
	NE (“E” from epicenter). The epicentral accuracy has been estimated
  with an appropriate network geometry criteria. Focal depth and origin time
  are uncalibrated. Many so-called “GT Catalogs” are dominated by events in
  this category. Requires a scale length.
</p>

<p>
	NF (“F” from focal depth). As NE but focal depth is calibrated. Requires
  a scale length.
</p>

<h2 id="everything-else-the-u-class">Everything Else: The U Class</h2>

<p>
	All seismic events that do not fit into one of the GT, C or N classifications
  are considered uncalibrated. That does not mean that none of the hypocentral
  coordinates are calibrated, only that the epicenter is not considered to be
  calibrated. The following classifications are defined:
</p>

<p>
	UE (“E” from epicenter). No hypocentral parameters are calibrated
  but there is a credible estimate of epicentral accuracy from a location
  analysis (confidence ellipse), leaving aside the question of systematic
  location bias. Requires a scale length. 
</p>

<p>
	UF (“F” from focal depth). As UE, but focal depth is calibrated. The
  subset of events in the EHB catalog (Engdahl et al., 1998) that carries
  depth estimates based on analysis of teleseismic depth phases would fall
  into this category, as would any event that has been the subject of a
  waveform modeling exercise that solves for focal depth. Requires a
  scale length.
</p>

<p>
	U (uncalibrated). Simply a dot on a map. No credible information is
  available on location accuracy, epicentral or otherwise. No scale
  length is used.
</p>

<h2 id="scale-length">Scale Length</h2>
<p>
	With the exception of the “U” category all classifications should
  carry a scale length, equivalent to the “X” in the GTX formulation.
  The ground truth (GT) class categories are defined with specific scale
  lengths, which refer to the uncertainty in both the epicenter and
  focal depth.
</p>

<p>
	For the Calibrated (C) and Network Geometry Criteria (N) classes
  the scale length is related to the uncertainty in epicenter only. For
  the CH class one would have to refer to a more detailed description of
  the data set to learn anything quantitative about the uncertainty in
  focal depth. The scale length is an integer, in kilometers, related
  to the uncertainty of the epicenter. Network geometry criteria always
  yield a single value for scale length. For the C class, as discussed
  above, there is no consensus about how the 2-dimensional uncertainty
  in an epicenter should be reduced to a single number. Three
  possibilities that seem reasonable when dealing with an ellipse
  with semi-minor axis a and semi-major axis b are:
</p>

<ul>
  <li> Nearest integer to the semi-major axis length of the
  confidence ellipse: nint(b).</li>
  <li>Nearest integer to the average of the two semi-axis
  lengths: nint((a+b)/2).</li>
  <li>Nearest integer to the radius of the circle with the
  same area as the ellipse: sqrt(ab).</li>
</ul>

<p>
	For a circular confidence region all three methods are equal. As
  the ellipticity of the confidence region increases, there will be
  substantial differences between the different scale lengths, but
  the first method will always yield the largest value. For a confidence
  ellipse with semi-axis lengths 1 and 5 km, for example, the scale length
  calculated with the three methods would be 5, 3, and 2 km, respectively.
  In analyses using mloc we use the first method, with the largest
  estimate of uncertainty.
</p>

<p>
	Scale lengths larger than 9 are permitted, but they have rapidly
  diminishing value in the current research environment. When the scale
  length of confidence ellipses moves into double digits, one ought
  to begin to worry about the legitimacy of the assumptions underlying
  the statistical analysis. Such events may better characterized by
  one of the uncalibrated categories.
</p>

<h2 id="confidence-levels">Confidence Levels</h2>
<p>
	As Bondar et al. (2004) pointed out, it is necessary to specify
  the confidence level that has been used in determining epicentral
  uncertainties, e.g., as a subscript in the form “GT905” to indicate
  that the confidence ellipse was calculated for a 90% confidence level.
  The concept of scale length is meaningless without it. Over more than
  a decade since the proposal was made, compliance on this point seems
  to be casual at best. It is admittedly awkward to include the subscript
  in computer output, and since the nomenclature is primarily intended
  to be carried in digital files it may be best to leave it out, but with
  the recommendation to clarify the issue in accompanying documentation.
  In the case of analyses done with mloc, the standard confidence level
  is 90%.
</p>

<h2 id="references">References</h2>
<ul class="referencelist">
	
<li>
	Bondar, I. K., Myers, S. C., Engdahl, E. R., & Bergman, E. A. (2004). 
  Epicentre accuracy based on seismic network criteria. Geophysical
  Journal International, 156, 483–496.
  http://doi.org/10.1111/j.1365-246X.2004.02070.x
</li>

<li>
	Croux, C. and Rousseeuw, P.J. (1992). Time-efficient algorithms
  for two highly robust estimators of scale, Computational Statistics,
  1, 411-428
</li>
  
<li>
	Engdahl, E. R., van der Hilst, R. D., & Buland, R. P. (1998).
  Global teleseismic earthquake relocation with improved travel
  times and procedures for depth determination. Bulletin of the
  Seismological Society of America, 88(3), 722–743
</li>

<li>
	Jordan, T.H. and K.A. Sverdrup (1981). Teleseismic location
  techniques and their application to earthquake clusters in the
  South-central Pacific, Bull. Seism. Soc. Am., 71,
  1105-1130.
</li>

<li>
	McNamara, D.E., Benz, H.M., Herrmann, R.B., Bergman, E.A.,
  Earle, P., Meltzer, A. Withers, M., and M. Chapman (2014).
  The Mw 5.8 Mineral, Virginia, earthquake of August 2011 and
  aftershock sequence: Constraints on earthquake source parameters
  and fault geometry, Bull. Seism. Soc. Am.,
  104, doi 10.1785/0120130058
  </li>
  
</ul>
