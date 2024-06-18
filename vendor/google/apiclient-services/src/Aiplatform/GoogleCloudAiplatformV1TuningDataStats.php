<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1TuningDataStats extends \Google\Model
{
  protected $distillationDataStatsType = GoogleCloudAiplatformV1DistillationDataStats::class;
  protected $distillationDataStatsDataType = '';
  protected $reinforcementLearningDataStatsType = GoogleCloudAiplatformV1ReinforcementLearningDataStats::class;
  protected $reinforcementLearningDataStatsDataType = '';
  protected $supervisedTuningDataStatsType = GoogleCloudAiplatformV1SupervisedTuningDataStats::class;
  protected $supervisedTuningDataStatsDataType = '';

  /**
   * @param GoogleCloudAiplatformV1DistillationDataStats
   */
  public function setDistillationDataStats(GoogleCloudAiplatformV1DistillationDataStats $distillationDataStats)
  {
    $this->distillationDataStats = $distillationDataStats;
  }
  /**
   * @return GoogleCloudAiplatformV1DistillationDataStats
   */
  public function getDistillationDataStats()
  {
    return $this->distillationDataStats;
  }
  /**
   * @param GoogleCloudAiplatformV1ReinforcementLearningDataStats
   */
  public function setReinforcementLearningDataStats(GoogleCloudAiplatformV1ReinforcementLearningDataStats $reinforcementLearningDataStats)
  {
    $this->reinforcementLearningDataStats = $reinforcementLearningDataStats;
  }
  /**
   * @return GoogleCloudAiplatformV1ReinforcementLearningDataStats
   */
  public function getReinforcementLearningDataStats()
  {
    return $this->reinforcementLearningDataStats;
  }
  /**
   * @param GoogleCloudAiplatformV1SupervisedTuningDataStats
   */
  public function setSupervisedTuningDataStats(GoogleCloudAiplatformV1SupervisedTuningDataStats $supervisedTuningDataStats)
  {
    $this->supervisedTuningDataStats = $supervisedTuningDataStats;
  }
  /**
   * @return GoogleCloudAiplatformV1SupervisedTuningDataStats
   */
  public function getSupervisedTuningDataStats()
  {
    return $this->supervisedTuningDataStats;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1TuningDataStats::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1TuningDataStats');
